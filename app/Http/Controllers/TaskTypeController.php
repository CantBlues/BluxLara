<?php

namespace App\Http\Controllers;

use App\Models\TaskType;
use Illuminate\Http\Request;

class TaskTypeController extends Controller
{
    //
    public function getTypes(){
        return $this->success(TaskType::all());
    }
}
