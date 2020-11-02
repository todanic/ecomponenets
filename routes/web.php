<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('{any}', 'AppController@index')->where('any', '.*');
Route::any('{all}', 'AppController@index')->where('all', '^(?!api).*$');
//Route::post('{any}', 'AppController@index')->where('any', '.*');


Route::get('/api/index', 'ImagesController@index');
Route::post('/api/email', 'AppController@email');


