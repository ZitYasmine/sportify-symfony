<?php

namespace App\Mail;

use Symfony\Component\Mailer\Mime\Email;

class WelcomeMail extends Email
{
    public function __construct(string $recipient)
    {
        $this->to($recipient);
        $this->subject('Welcome to Sportify');
        $this->html('<p>Welcome to Sportify! We are excited to have you on board.</p>');
    }
}
