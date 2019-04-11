<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;
use Str;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class UploadsController extends Controller
{
    public function index() {
        $photo = new Photo;
        $photo->url = 'elGXHTo3cO9P4owFXEUduEkiv.png';
        $photo->save();
        return 'ok';
    }


    public function upload() {
        return view('upload');
    }


    public function doUpload(Request $request) {
        // $path = $request->file('file')->store('public/photos');

        $img = Image::make($request->file('file'))->resize(620, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', '72');

        $filename = Str::random(25) . '.png';
        // $path = $img->save("public/photos/{$filename}");

        // $path = Storage::put("public/photos/{$filename}.png", (string) $img);

        Storage::disk('do-spaces')->put("test/{$filename}", (string) $img, 'public');

        $photo = new Photo;
        $photo->url = $filename;
        $photo->save();

        // Log::info('file saved at path: ' . $path);

        return 'ok';
    }
}
