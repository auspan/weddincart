<?php

namespace weddingcart;
use Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','middle_name','last_name','name', 'email', 'password','phone', 'facebook_id', 'google_id', 'verified', 'verification_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    // Relationships

    public static function boot()
    {
        parent::boot();

        static::creating(function($user){
           $user->verification_token = str_random(30);

            // For social media registration verified should be set to true whenever a user is created.
            if(!empty($user->facebook_id) OR !empty($user->google_id) ){
                $user->verified = true;
            }
        });
    }

    public function userEvents() {

        return $this->hasMany('weddingcart\UserEvent');

    }

    public function userEventRoles() {

        return $this->hasMany('weddingcart\UserEventRole');

    }

    public function wishlistitemContributions() {

        return $this->hasMany('weddingcart\WishlistItemContribution');

    }


    public function contacts() 
    {
        return $this->hasMany('weddingcart\Contact');
    }


    public function isNew()
    {
        if($this->userEventRoles()->count() == 0){
            return true;
        }
        else
        {
            return false;
        }
    }

    public function isHost()
    {
        if($this->userEventRoles()->count() == 1 && $this->userEventRoles()->first()->role == 1){
            return true;
        }
        else
        {
            return false;
        }
    }

    public function isGuest()
    {
        if($this->userEventRoles()->count() == 1 && $this->userEventRoles()->first()->role == 2){
            return true;
        }
        else
        {
            return false;
        }
    }

    public function createWedding($eventDate)
    {
        $wedding =  $this->userEvents()->create(['event_id' => 1, 'event_date' => $eventDate]);
//        dd($wedding);
        $this->userEventRoles()->create([
            'role' => 1,
            'user_id' => $this->id,
            'user_event_id' => $wedding->id
        ]);

        return $wedding;
    }

    public function verifyEmail()
    {
        $this->verified = true;
//        $this->verification_token = null;
        $this->save();

    }
}
