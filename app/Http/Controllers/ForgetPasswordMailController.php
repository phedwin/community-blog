<?php

namespace App\Http\Controllers;

use App\Mail\confirmAccountPassword;
use Illuminate\Http\Request;


class ForgetPasswordMailController extends Controller
{
    public function index()
    {

        $user = \App\Models\User::find(1);

        \Illuminate\Support\Facades\Mail::to($user->email)->send(new confirmAccountPassword($user));
    }
}
