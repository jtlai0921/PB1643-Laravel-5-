<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class MailController extends Controller
{

    public function getSend(){

    	Mail::send('email.test',[],function($message){
    		$message->subject('Laravel 5 Mail');
		    $message->to('exmaple@mail.com');
		});
    	return "Email 已寄出";
    }

}
