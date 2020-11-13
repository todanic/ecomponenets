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

        //public_path must be removed for production
        $files = File::allFiles(public_path($folder));
        $images_path = [];

        foreach ($files as $file) {
            $images_path[] = '/' . $folder . '/' . $file->getRelativePathname();
        }

        return array('images' => $images_path);
    }

}
