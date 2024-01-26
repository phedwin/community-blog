<?php

namespace App\Services;

use App\Mail\WeeklyNewsletter;
use Illuminate\Mail\Mailer;

class NewsletterService
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendWeeklyNewsletter($userEmail)
    {
        // Implement your logic to send weekly newsletters
        $this->mailer->to($userEmail)->send(new WeeklyNewsletter());

        // You might want to log or perform other actions here
    }
}