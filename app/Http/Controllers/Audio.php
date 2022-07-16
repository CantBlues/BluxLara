<?php

namespace App\Http\Controllers;

use App\Models\Audio as ModelsAudio;
use Illuminate\Http\Request;

class Audio extends Controller
{
    public function getAll(){
        $data = ModelsAudio::select("id","name","path")->get();
        return $this->success($data);
    }
}
