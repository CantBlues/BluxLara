<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PhoneUsage extends Model {
    use HasFactory;
    protected $fillable = ["usage","appid","node"];
    public $timestamps = false;

    static public function saveOneDay($dateNode, $list) {
        // Will Compare different saving algorithm's time-consuming of gap.
        foreach($list as &$app){
            $appInfo = PhoneApp::firstOrCreate(["package_name"=>$app["name"]]);
            $app["appid"] = $appInfo->id;
            $app["usage"] = $app["usage"];
            $app["node"] = $dateNode;
            PhoneUsage::create($app);
        }

        return true;
    }
}
