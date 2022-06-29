<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskType;
use Carbon\Carbon;
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

    public function contribution(Request $q){
        $type = $q->input("type");
        if($type == "Sum"){
            $data = Task::selectRaw("sum(task_types.weight) as sum,tasks.date")->where("mark",true)
                ->join("task_types","tasks.type_id","=","task_types.id")->groupBy("date")->get();
            return $this->success($data);
        }else{
            $data = [];
            $typeId = TaskType::where("name",$type)->pluck("id");
            if($typeId) $data = Task::where("mark",true)->where("type_id",$typeId)->get();
            return $this->success($data);
        }
    }

    public function getMonthData(){
        $thismonth = [Carbon::now()->subDays(30),Carbon::now()];
        $lastmonth = [Carbon::now()->subDays(60),Carbon::now()->subDays(30)];
        $data["this_month"] = TaskType::selectRaw("count(tasks.id) as times,task_types.name")
            ->join("tasks","task_types.id","=","tasks.type_id")->whereBetween("tasks.date",$thismonth)
            ->groupBy("tasks.type_id")->where("tasks.mark",true)->get();
        $data["last_month"] = TaskType::selectRaw("count(tasks.id) as times,task_types.name")
            ->join("tasks","task_types.id","=","tasks.type_id")->whereBetween("tasks.date",$lastmonth)
            ->groupBy("tasks.type_id")->where("tasks.mark",true)->get();
        return $this->success(($data));
    }
}
