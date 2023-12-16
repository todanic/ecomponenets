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
  public function index(Request $request)
  {

    return view('app');
  }

  /**
   * @param Request $request
   */
  public function email(Request $request)
  {
    $imgPath = '';

    if ($request->has('images')) {
      $images = $request->images;

      if (!is_string($images)) {
        $imgPath = [];

        foreach ($images as $image) {
          $imgName = 'attachment-' . time() . rand(1, 10000) . '.' . $image->getClientOriginalExtension();
          $path = $image->storeAs('uploads', $imgName);
          $imgPath[] = $path;
        }
      } else {
        $imgName = 'attachment-' . time() . '.' . $images->getClientOriginalExtension();
        $imgPath = $images->storeAs('uploads', $imgName);
      }
    }

    event(new EmailEvent($request->email, $request->name, $request->phone, $request->country, $request->message, $imgPath));
  }
}
