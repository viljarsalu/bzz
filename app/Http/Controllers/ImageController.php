<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function getImage($size, $filename) {
        //make a new response out of the contents of the file
        // we refactor this to use the image resize functino.
        // set the response status code to 200 ok
        $response = Response::make(Image::resize($filename,$size),200);
        $response->header('content-type',Image::getMimeType($filename));
        return $response;

    }
}
