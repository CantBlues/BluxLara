<?php

namespace App\Http\Controllers;

use App\Models\BoostTemplate;
use Illuminate\Http\Request;

class ToolsController extends Controller {

    public function getBoost() {
        return $this->success(BoostTemplate::latest()->first());
    }
}
