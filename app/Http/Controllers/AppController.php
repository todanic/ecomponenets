<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EmailEvent;

class AppController extends Controller
{
    public function index(Request $request) {

        if($request->image) {
            $path = $request->file('photo')->store('cache');
            $file = $request->file('photo');
            $path = $file->storeAs('cache', $filename);
            
            var_dump(time().'.'.$request->image->getClientOriginalExtension());
        }
        
        // Storage::disk('cache')->put($request->attachments, 'Contents');

        if (last($request->segments()) == 'email') {
            // event(new EmailEvent($request->email, $request->name, $request->phone, $request->country, $request->messages));
        } else { 
            return view('app'); 
        }
    
    }
}
