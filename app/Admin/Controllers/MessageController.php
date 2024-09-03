<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Illuminate\Http\Request;
use Storage;

class MessageController extends AdminController {
    public function index(Content $content) {
        Admin::requireAssets("@webuploader");

        return $content->header("WebSocket Channel")->body(admin_view("admin/chatroom"));
    }

    public function uploadFile(Request $request) {
        $file = Storage::disk('public')->put($request->input("name"), $request->file("file"));
        return Storage::disk('public')->url($file);
    }
}
