<?php

namespace App\Http\Controllers;

use App\Models\Video;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getById($id){

        $video = Video::find($id);
        return $this->success($video);
    }
}
