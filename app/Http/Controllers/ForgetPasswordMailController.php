<?php

namespace App\Http\Controllers;

use App\Mail\confirmAccountPassword;
use App\Models\User;
use BeyondCode\Mailbox\Facades\Mailbox;
use BeyondCode\Mailbox\InboundEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordMailController extends Controller
{
    public function index()
    {

        $username = User::find(1);

        // Mail::to($user->email)->send( new confirmAccountPassword($user));


        Mailbox::from('{username}@gmail.com', function (InboundEmail $email, $username) {
            // Access email attributes and content
            $subject = $email->subject();
            
            $email->reply(new confirmAccountPassword($username));
        });
    }
}
