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

        if(!is_string($request->images)) {
            if(is_countable($request->images)) {
                $imgPath = [];

                foreach ($request->images as $image) {
                    $imgName = 'attachment-'.time().rand(1,10000) .'.'.$image->getClientOriginalExtension();
                    $path = $image->storeAs('uploads', $imgName);
                    array_push($imgPath, $path);
                }
            } else {
                $imgPath = '';
                $imgName = 'attachment-'.time().'.'.$request->images->getClientOriginalExtension();
                $imgPath = $request->images->storeAs('uploads', $imgName);
            }
        } else {
            $imgPath = '';
        }

        event(new EmailEvent($request->email, $request->name, $request->phone, $request->country, $request->message, $imgPath));
    }
}
