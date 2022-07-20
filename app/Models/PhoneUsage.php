<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PhoneUsage extends Model {
    use HasFactory;
    protected $fillable = ["usage", "appid", "node"];
    public $timestamps = false;

    static public function saveOneDay($dateNode, $list, $apps) {

        $sum = 0;
        $ignoreApps = $apps->where("ignore", true)->pluck('id');

        foreach ($list as &$app) {
            $name = $app['name'];
            $exist = $apps->contains(function ($value, $key) use ($name) {
                return $key == $name;
            });
            if ($exist) {
                $app["appid"] = $apps[$name]["id"];
            } else {
                $appInfo = PhoneApp::firstOrCreate(["package_name" => $app["name"]]);
                $app["appid"] = $appInfo->id;
            }
            $app["node"] = $dateNode;
            unset($app['name']);

            // Check app whether is ignored. 
            if (!$ignoreApps->contains($app['appid'])) $sum += $app['usage'];
        }
        $list[] = ["appid" => $apps["sum"]["id"], "usage" => $sum, "node" => $dateNode];

        PhoneUsage::insert($list);

        return true;
    }
}
