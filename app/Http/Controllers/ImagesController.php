<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function index(Request $request) {
        $folder = 'images/' .  $request->input('folder');

        $files = File::allFiles(public_path($folder));
        $images = [];

        foreach ($files as $file) {
            $images[] = $file->getRelativePathname();
        }

        return array('images'=>$images);
    }

}