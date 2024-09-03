<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class FileUpload extends Controller {
    public function uploadFile(Request $request) {
        $file = Storage::disk('public')->put($request->input("name"), $request->file("file"));
        $url = Storage::disk('public')->url($file);
        return $this->success($url);
    }
}
