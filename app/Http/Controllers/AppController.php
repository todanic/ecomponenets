<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EmailEvent;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function index(Request $request) {

	    return view('app');
	}

    /**
     * @param Request $request
     */
	public function email(Request $request) {
	    
        event(new EmailEvent($request->email, $request->name, $request->phone, $request->country, $request->message, $imgPath));
    }
}
