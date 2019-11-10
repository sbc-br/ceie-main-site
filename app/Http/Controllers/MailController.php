<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $theName = "Joãozinho";
        $theEmail = "joazinho@gmail.com";
        $theSubject = "Test";
        $theMessage = "This is a test email sent from Laravel";


        Mail::to('luiz.noschang@gmail.com')->send(new ContactEmail($theName, $theEmail, $theSubject, $theMessage));

        return "LOL";
        // return Config::get('mail.host');
    }
}
