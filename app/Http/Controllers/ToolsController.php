<?php

namespace App\Http\Controllers;

use App\Models\BoostTemplate;
use App\Models\JudgeRule;
use Illuminate\Http\Request;

class ToolsController extends Controller {

    public function getBoost() {
        $data = BoostTemplate::latest()->first();
        $data = $data['content'];
        $data = json_decode($data, true);
        return $this->success($data);
    }

    public function getJudgeRule() {
        $data = JudgeRule::latest()->first();
        $data = $data['content'];
        return $this->success($data);
    }
}
