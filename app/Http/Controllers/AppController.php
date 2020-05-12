<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        var_dump(__('home.welcome'));
        var_dump(23423);
        // return view('app');
    }
}
