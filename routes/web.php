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

// Route::get('/', function () {
//     return redirect('/sr');
// });
// Route::prefix('{lang}')->group(function() {

//     Route::get('/', 'AppController@index');
//     Route::get('/wholesale', 'AppController@index');
//     Route::get('/gallery', 'AppController@index');
//     Route::get('/wire-and-harness', 'AppController@index');
//     Route::get('/about-us', 'AppController@index');
//     Route::get('/contact-us', 'AppController@index');
// });
// Route::any('{all}', 'AppController@index')->where('all', '^(?!api).*$');
Route::get('/', 'AppController@index');
Route::get('/api/index', 'ImagesController@index');
Route::post('/api/email', 'AppController@email');
// Route::get('setlocale/{locale}', function ($locale) {
// 	if (in_array($locale, \Config::get('app.locales'))) {
// 	  session(['locale' => $locale]);
// 	}
// 	return redirect()->back();
//   });

// Route::get('/{lang}', function ($lang) {

//     App::setlocale($lang);
//     return view('home');
// });


