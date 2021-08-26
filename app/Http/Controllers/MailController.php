<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send_mail()
    {
        $details = [
            'title' => 'Mail from Valo It',
            'body' => 'Thank you from our site'
        ];
        Mail::to('shawnshikder1996@gmail.com')->send(new TestMail($details));
        return "Email Has been Sent!!";
    }
}
