<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Test mail from Laravel API',
            'body' => 'This is a test mail sended by using laravel API...'
        ];

        Mail::to("foryou.need00@gmail.com")->send(new TestMail($details));
        return "Email Sent Successfully!..";
    }
}
