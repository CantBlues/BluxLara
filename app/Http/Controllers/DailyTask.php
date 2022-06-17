<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class DailyTask extends Controller
{
    public function mark(Request $q){
        if($q->has(['name','date','mark'])){
            $date = date("Y-m-d",$q->input("date")/1000);
            $task = Task::firstOrNew(["name"=>$q->input('name'),"date"=>$date]);
            $task->mark = $q->input("mark");
            $task->save();
            return $task;
        }

    }

    public function viewDaily($timestamp){
        $date = date("Y-m-d",$timestamp/1000);
        $data = Task::where("date",$date)->where('mark',true)->get();
        return $this->success($data);
    }
}
