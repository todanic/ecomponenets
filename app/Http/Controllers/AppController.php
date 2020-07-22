<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EmailEvent;

class AppController extends Controller
{
    public function index(Request $request) {

       
        if (last($request->segments()) == 'email') {
     
            // view('mail.contact-us', ['name' => $request->name]);
            event(new EmailEvent($request->email));
        } else { 
            return view('app'); 
        }
    
    }
}
