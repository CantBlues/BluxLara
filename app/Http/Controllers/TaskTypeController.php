<?php

namespace App\Http\Controllers;

use App\Models\TaskType;
use Illuminate\Http\Request;

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
        $type->save();
        return $this->success($type);
    }
}
