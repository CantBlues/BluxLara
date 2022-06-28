<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskType;
use Illuminate\Http\Request;

class DailyTask extends Controller
{
    public function mark(Request $q){
        if($q->has(['name','date','mark'])){
            $date = date("Y-m-d",$q->input("date")/1000);
            $name = $q->input('name');
            $typeId = TaskType::firstWhere("name",$name)["id"];
            if(!isset($typeId)) return $this->failed("Not exist the task");
            $task = Task::firstOrNew(["name"=>$name,"date"=>$date]);
            $task->mark = $q->input("mark");
            $task->type_id = $typeId;
            $task->save();
            return $task;
        }
    }

    public function viewDaily($timestamp){
        $date = date("Y-m-d",$timestamp/1000);
        $data = Task::where("date",$date)->where('mark',true)->get();
        return $this->success($data);
    }

    public function contribution($type){

    }
}
