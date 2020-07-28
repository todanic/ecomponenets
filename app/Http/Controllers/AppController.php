<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EmailEvent;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{
    public function index(Request $request) {

        // if($request->images) {
         
            // var_dump($request->all());
            // Storage::disk('uploads')->put($request->images, 'Contents');
        //     $path = $request->file('photo')->store('cache');
        //     $file = $request->file('photo');
        //     $path = $file->storeAs('cache', $filename);
            
        //     var_dump(time().'.'.$request->image->getClientOriginalExtension());
        // }
    
        // Storage::disk('cache')->put($request->attachments, 'Contents');

        if (last($request->segments()) == 'email') {
            event(new EmailEvent($request->email, $request->name, $request->phone, $request->country, $request->message));
        } else { 
            return view('app'); 
        }
    
    }
}
