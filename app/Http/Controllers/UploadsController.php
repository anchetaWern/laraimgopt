<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Str;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class UploadsController extends Controller
{
    public function index() {

        $base_url = env('SPACES_BASE_URL') . '/photos/';
        $photos = Photo::inRandomOrder()->limit(10)->get()->toArray();

        $page_data = [
            'photos' => $photos,
            'base_url' => $base_url
        ];

        return view('index', $page_data);
    }


    public function upload() {
        return view('upload');
    }


    public function doUpload(Request $request) {
        $file = $request->file('file')
        $img = Image::make($file)->resize(620, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', '72');

        $filename = Str::random(25) . '.png';

        Storage::disk('do-spaces')->put("photos/{$filename}", (string) $img, 'public');

        $photo = new Photo;
        $photo->url = $filename;
        $photo->save();

        return 'ok';
    }
}
