<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\SendMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CertController extends Controller
{
    public function index(Request $request)
    {
        if ($request->missing('email')) {
            // email missing from form
            return redirect('form')->withInput();

        }
        $email=$request->email;


        $email_db = DB::table('students')->where('email', $email)->value('email');

        if ($email != $email_db)
            // We are in trouble
            return view('email-failed');

        DB::table('receipts')
            ->insert([
                'email' => $email,
                'email_created_at' => date("Y-m-d H:i:s", strtotime('now'))
            ]);

        // Get the name of the Student
        $firstName = DB::table('students')->where('email', $email)->value('firstName');
        $lastName = DB::table('students')->where('email', $email)->value('lastName');

        $name = $firstName . ' ' . $lastName;

        // Get the Contact creation date

        $creationDate = DB::table('students')->where('email', $email)->value('contactCreation');


        // Now get the type of Cert for generation based on the reti

        $courseNumber  = DB::table('students')->where('email', $email)->value('course');

        $certObject = new Certificate();

        if ($courseNumber==1) $certObject->generate($name,'mbsr',$creationDate);
        elseif ($courseNumber==2) $certObject->generate($name,'711',$creationDate);
        elseif ($courseNumber==3) $certObject->generate($name,'1218',$creationDate);
        else
            return view('error-occured');

        // Send the email

        $p = new SendMail();

        $p->send($email);

        return view('email-success');

    }
}
