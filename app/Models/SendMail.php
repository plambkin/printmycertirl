<?php


namespace App\Models;


use App\Mail\CertEmail;
use Illuminate\Support\Facades\Mail;

class SendMail
{
    public function send($email) {

        $to_email = $email;

        Mail::to($to_email)->send(new CertEmail);

    }
}
