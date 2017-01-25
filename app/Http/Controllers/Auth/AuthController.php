<?php

namespace weddingcart\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Validator;
use weddingcart\Http\Controllers\Controller;
use weddingcart\Mailers\AppMailer;
use weddingcart\User;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
     protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'redirectToProvider', 'handleProviderCallback']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    /**
     * Handle a registration request for the application. (Overridden Trait method to support Email Verification
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request, AppMailer $mailer)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());
//        Auth::guard($this->getGuard())->login($this->create($request->all()));

        $mailer->sendVerificationMail($user);
//        session()->flash('message','An email has been sent to your email address.
//         Please check the mail and verify your email address to complete the registration process');
//        return redirect($this->redirectPath());
        return view('pages.registrationMessage');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Redirect the user to the social provider authentication page.
     *
     * @param $provider
     * @return Response
     */
    public function redirectToProvider($provider)
    {
       // return("Reached Safely");
        $googleScopes = ['https://www.googleapis.com/auth/contacts.readonly', 'https://www.googleapis.com/auth/plus.login'];
     
     // dd($googleScopes);  
        if($provider == 'google')
        {
            return \Socialite::driver($provider)->scopes($googleScopes)->redirect();
        }
        else
        {
            return \Socialite::driver($provider)->redirect();
        }
    }

    /**
     * Obtain the user information from social provider.
     *
     * @param $provider
     * @param Request $request
     * @return Response
     */
    public function handleProviderCallback($provider, Request $request)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } 
        catch (Exception $e) 
        {
                    return Redirect::to('/auth/login');
        }

        // dd(Socialite::driver($provider));



        if($provider == 'google')
        {
            $request->session()->put('socialToken', $user->token);
        }

        $authUser = $this->findOrCreateUser($user, $provider);

        if(Auth::check())
        {
           // return ('User Already Logged In');
            return redirect()->action('ContactsController@importGoogleContacts');
        } else
        {
            auth()->login($authUser, true);
        }

        return redirect()->to('/home');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $socialLiteUser
     * @param $key
     * @return User
     */
    private function findOrCreateUser($socialLiteUser, $key)
    {

        $googleId = null;
        $facebookId = null;

        if($key=='google'){
            $googleId = $socialLiteUser->id;
        } else {
            $facebookId = $socialLiteUser->id;
        }
        $socialColumn = $key . '_id';
//        dd("Social Column: ".$socialColumn);
        $user = User::updateOrCreate([
            'email' => $socialLiteUser->email,
        ], [
            'google_id' => $googleId,
            'facebook_id' => $facebookId,
            'name' => $socialLiteUser->name
        ]);

        return $user;
    }

    public function verifyEmail($token)
    {
        $user = User::whereVerificationToken($token)->firstOrFail()->verifyEmail();
        // TODO: Flash mess confirming verification of Email address

        // Redirect to Login Page
        return view('auth.login');
    }
}
