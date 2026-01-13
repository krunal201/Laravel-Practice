<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class MailController extends Controller
{
    public function send(){
        $data=[
            "name"=>"John Doe",
            "email"=> "johndoe@gmail.com",
            "message"=>"This is just sample mail."
        ];

        Mail::to("abc@gmail.com")->send(new SendMail($data));

        // return view("first",['data'=>$data]);
    }
}
