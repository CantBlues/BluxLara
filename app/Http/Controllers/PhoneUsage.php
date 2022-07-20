<?php

namespace App\Http\Controllers;

use App\Models\PhoneApp;
use App\Models\PhoneUsage as ModelsPhoneUsage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class PhoneUsage extends Controller {
    public function getApps() {
        $data = PhoneApp::all();

        return $this->success($data);
    }

    public function getUsagesByAppId($id) {
        $dateNode = date("Ymd", strtotime("-1 year"));;
        $data = ModelsPhoneUsage::where("node", ">=", $dateNode)->where("appid", $id)->get();
        return $this->success($data);
    }

    public function dealUsages(Request $request) {
        $st = microtime(true);

        $existNode = $this->recentlyNode();
        $apps = PhoneApp::all();
        $apps = $apps->keyBy("package_name");

        foreach ($request->input() as $dailyUsage) {
            $dateNode = $dailyUsage["node"];
            $dateNode = Carbon::parseFromLocale($dateNode)->format("Y-m-d");
            $dateNode = date($dateNode);
            $usageList = $dailyUsage["data"];
            if (!$existNode->contains($dateNode) && count($usageList) > 1) {
                $ok = ModelsPhoneUsage::saveOneDay($dateNode, $usageList,$apps);
                if (!$ok) return $this->failed("");
            }
        }

        $et = microtime(true);

        return $this->success($et -  $st);
    }

    public function editApp(Request $request) {
        $input = $request->input();
        $id = $input["id"];
        $name = $input["name"];
        $result = PhoneApp::where("id", $id)->update(["name" => $name]);
        return $this->success($result);
    }

    public function recentlyNode() {
        $recently = Carbon::now()->startOfDay()->subDays(9);
        $data = ModelsPhoneUsage::where('appid', PhoneApp::where("package_name", "android")->value("id"))->where("node", ">=", $recently)->pluck('node');
        return $data;
    }

    public function getRecentlyNode() {
        $data = $this->recentlyNode();
        return $this->success($data);
    }
}
