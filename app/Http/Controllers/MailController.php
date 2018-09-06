<?php

namespace App\Http\Controllers;
use Mail;
use Auth;
use App\Mail\Usermail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function AdminMail()
    {
        $data = array('name'=>Auth::user()->name, 'body'=>"Welcome to laravel mail");

        Mail::send('email.adminMail', $data, function ($message) {
            $message->to('nahid.limu@gmail.com', 'nahid')
            ->subject('Admin mail');
            
            $message->from('abc@gmail.com', 'laravel 5.7');
            
        });
        //return view('email.name');
        echo "mail sent";
    }


    public function sentMail(Request $request)
    {
        $data = [
            'name' =>$request->name,
            'email' =>$request->email,
            'msg' =>$request->msg,
        ];
        //$data = array('name'=>Auth::user()->name, 'body'=>"Welcome to laravel mail");

        // Mail::send('email.userMail', $data, function ($message) {
        //     $message->to('nahid.limu@gmail.com', 'nahid')
        //     ->subject('User mail');
            
        //     $message->from(Auth::user()->email, 'laravel 5.7');
            
        // });

        Mail::to('nahid.limu@gmail.com', 'nahid')->queue(new Usermail($data));
        //return view('email.name');
        echo "mail sent to admin";
    }
}
