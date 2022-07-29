<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;

class MessageController extends AdminController
{
    public function index(Content $content){
        return $content->header("WebSocket Channel")->body(admin_view("admin/chatroom"));
    }
}
