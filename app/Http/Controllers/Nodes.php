<?php

namespace App\Http\Controllers;

use App\Models\Node;
use Illuminate\Http\Request;
use Log;

class Nodes extends Controller {
    public function saveNodes(Request $request) {
        $nodes = $request->input();
        $nodeModel = new Node();
        $nodeModel->saveNodes($nodes);
    }

    public function getNodes() {
        $nodes = Node::latest("updated_at")->get(Node::$ColumnMaps);
        return $this->success($nodes);
    }
}
