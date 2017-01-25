<?php
/**
 * Created by PhpStorm.
 * User: 59420166
 * Date: 09-05-2016
 * Time: 16:12
 */

namespace weddingcart\Mailers;


use Illuminate\Mail\Mailer;
use weddingcart\User;

class AppMailer {

    protected $mailer;

    protected $from;
    protected $to;
    protected $view;
    protected $subject;
    protected $data = [];
    protected $logoImagePath;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
        $this->logoImagePath = public_path()."/images/logo.png";
    }

    public function sendInviteEmail($data)
    {
        $recepients = $data['to'];
        $this->data = $data;
        $this->from = 'invites@weddincart.com';
        $this->subject = 'Wedding Invitation';
        $this->subject = $data['subject'];
        $this->view = "emails.invite";
        $this->deliver_many($recepients);
    }

    public function sendVerificationMail(User $user)
    {
        $this->to = $user->email;
        $this->view = "emails.welcome";
        $this->data = compact('user');
        $this->data['logoImagePath'] = $this->logoImagePath;
        $this->from = 'support@weddincart.com';
        $this->subject = 'Welcome to WeddinCart';
//        $this->subject = $data['subject'];
//        dd($recepients);
        $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message){
            $message->from($this->from, 'WeddinCart Support')
                ->to($this->to)
                ->subject($this->subject);

        });
    }
    public function deliver_many($recepients)
    {
        foreach ($recepients as $recepient) {
            $this->to = $recepient;
            $this->deliver();
    }
    }
}