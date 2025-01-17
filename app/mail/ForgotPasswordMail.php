<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password_random;

    public function __construct($user, $password_random)
    {
        $this->user = $user;
        $this->password_random = $password_random;
    }

    public function build()
    {
        return $this->markdown('email.forgot_password')
            ->subject(config('app.name') . ' - Forgot Password');
    }
}
