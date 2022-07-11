<?php

namespace App\Http\Controllers;

use App\Models\PhoneApp;
use App\Models\PhoneUsage as ModelsPhoneUsage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PhoneUsage extends Controller {
    public function getApps() {
        $data = PhoneApp::all();

        return $this->success($data);
    }

    public function getUsagesByAppId($id) {
        $dateNode = date("Ymd", strtotime("-1 year"));;
        $data = ModelsPhoneUsage::where("node", ">=",$dateNode)->where("appid",$id)->get();
        return $this->success($data);
    }

    public function dealUsages(Request $request) {
        $st = microtime(true);

        $rencently = Carbon::now()->subDays(9);
        $existNode = ModelsPhoneUsage::where('appid',PhoneApp::where("package_name","android")->value("id"))->where("node",">=",$rencently)->pluck('node');

        foreach ($request->input() as $dailyUsage) {
            $dateNode = $dailyUsage["node"];
            if (!$existNode->contains($dateNode)) {
                $usageList = $dailyUsage["data"];
                $ok = ModelsPhoneUsage::saveOneDay($dateNode, $usageList);
                if (!$ok) return $this->failed("");
            }
        }

        $et = microtime(true);

        return $this->success($et -  $st);
    }

    public function editApp(Request $request){
        $input = $request->input();
        $id = $input["id"];
        $name = $input["name"];
        $result = PhoneApp::where("id",$id)->update(["name"=>$name]);
        return $this->success($result);
    }

    public function getRecentlyNode(){
        $rencently = Carbon::now()->subDays(9);
        $data = ModelsPhoneUsage::where('appid',PhoneApp::where("package_name","android")->value("id"))->where("node",">=",$rencently)->pluck('node');
        return $this->success($data);
    }
}
