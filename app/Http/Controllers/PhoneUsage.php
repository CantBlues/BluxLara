<?php

namespace App\Http\Controllers;

use App\Models\PhoneApp;
use App\Models\PhoneUsage as ModelsPhoneUsage;
use Illuminate\Http\Request;

class PhoneUsage extends Controller {
    public function getApps() {
        $data = PhoneApp::all();

        return $this->success($data);
    }

    public function getUsages() {
        $data = ModelsPhoneUsage::first();
        return $this->success($data);
    }

    public function dealUsages(Request $request) {
        $st = microtime(true);
        
        $lastDate = ModelsPhoneUsage::orderBy("id","desc")->value("node");

        foreach ($request->input() as $dailyUsage) {
            $dateNode = $dailyUsage["node"];
            if ($lastDate < $dateNode) {
                $usageList = $dailyUsage["data"];
                $ok = ModelsPhoneUsage::saveOneDay($dateNode, $usageList);
                if (!$ok) return $this->failed("");
            }
        }

        $et = microtime(true);

        return $this->success($et -  $st);
    }
}
