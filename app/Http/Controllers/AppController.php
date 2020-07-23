<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EmailEvent;

class AppController extends Controller
{
    public function index(Request $request) {

        if (last($request->segments()) == 'email') {
            event(new EmailEvent($request->email, $request->name, $request->phone, $request->country, $request->messages));
        } else { 
            return view('app'); 
        }
    
    }
}
