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

    public function getUsagesByAppId($id) {
        $dateNode = date("Ymd", strtotime("-1 year"));;
        $data = ModelsPhoneUsage::where("node", ">=",$dateNode)->where("appid",$id)->get();
        return $this->success($data);
    }

    public function dealUsages(Request $request) {
        $st = microtime(true);

        $lastDate = ModelsPhoneUsage::orderBy("id", "desc")->value("node");

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

    public function editApp(Request $request){
        $input = $request->input();
        $id = $input["id"];
        $name = $input["name"];
        $result = PhoneApp::where("id",$id)->update(["name"=>$name]);
        $this->success($result);
    }
}
