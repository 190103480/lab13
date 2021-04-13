<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $details = [
            'title' => 'Mail from Cosmetics store',
            'body' =>'This is for testing mail using gmail.'
        ];
        Mail::to('dareka1705@gmail.com')->send(new DemoEmail($details));
        return "Email Sent";
            
        /*$objectDemo=new \stdClass();
        $objectDemo->receiver='Zhandos';
        $objectDemo->sender='Zhuldyz';*/
       
    }
}
