<?php

namespace App\Http\Controllers;

use App\Models\Habbit;
use App\Models\HabbitRecord;
use App\Models\TaskType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TaskTypeController extends Controller {
    public function getTypes() {
        return $this->success(TaskType::orderBy("sort", "desc")->get());
    }

    public function setOrder(Request $request) {
        $data = $request->input();
        TaskType::upsert($data, ["id"], ['sort']);
        return $this->success($data);
    }

    public function addOrEditType(Request $request) {
        $info = $request->input();
        $where = ["id" => $request->has("id") ? $info["id"] : null];
        $type = TaskType::firstOrNew($where);
        $type->name = $info["name"];
        $type->weight = $info["weight"];
        $type->classify = $info["classify"];
        $type->save();
        return $this->success($type);
    }

    public function getHabbitTypes() {
        return $this->success(Habbit::get());
    }

    public function recordHabbit(Request $r){
        $habbit = $r->input("id");
        $exist = HabbitRecord::whereDate("created_at", Carbon::today())->where("habbit_id", $habbit)->first();
        if($exist){
            HabbitRecord::whereDate("created_at", Carbon::today())->where("habbit_id", $habbit)->increment("weight");
        }else{
            $record = new HabbitRecord();
            $record->habbit_id = $habbit;
            $record->weight = 1;
            $record->save();
        }
        return $this->success("");
    }
}
