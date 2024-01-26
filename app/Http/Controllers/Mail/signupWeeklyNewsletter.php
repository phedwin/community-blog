<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class signupWeeklyNewsletter extends Controller
{
    public function index()
    {
        return inertia('Mail/WeeklyNewsLetter');
    }

    public function store()
    {
        // Validate and process the signup form data
        // ...

        // Redirect back to the signup form (for example)
        return inertia('Mail/WeeklyNewsLetter');
    }
}
