<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class FileUpload extends Controller {
    public function uploadFile(Request $request) {
        $file = Storage::disk('cdisk')->put($request->input("name"), $request->file("file"));
        $url = Storage::disk('cdisk')->url($file);
        return $this->success($url);
    }
}
