<?php

use App\Http\Controllers\Nodes;
use App\Http\Controllers\Audio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyTask;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\PhoneUsage;
use App\Http\Controllers\TaskTypeController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/task/mark', [DailyTask::class, 'mark']);
Route::get('/tasks/daily/{timestamp}', [DailyTask::class, 'viewDaily']);
Route::get("/tasks/contribution", [DailyTask::class, 'contribution']);
Route::get("/tasks/compare2month", [DailyTask::class, 'getMonthData']);
Route::get("/recently_exercise", [DailyTask::class, 'getRecentlyExercise']);

Route::get("/tasktypes", [TaskTypeController::class, 'getTypes']);
Route::post("/task/types/order", [TaskTypeController::class, 'setOrder']);
Route::post("/task/type/addoredit", [TaskTypeController::class, 'addOrEditType']);

Route::get('/video/{id}', [VideoController::class, 'getById']);



Route::get("/phone/apps", [PhoneUsage::class, "getApps"]);
Route::post("/phone/app/edit", [PhoneUsage::class, "editApp"]);
Route::get("/phone/usages/{appid}", [PhoneUsage::class, "getUsagesByAppId"]);
Route::get("/phone/usages/recently/node", [PhoneUsage::class, "getRecentlyNode"]);
Route::get("/phone/usages/top/{date}", [PhoneUsage::class, "getUsageTopByDate"]);

Route::post("/phone/usages", [PhoneUsage::class, "dealUsages"]);

Route::post("/file/upload", [FileUpload::class, "uploadFile"]);

Route::get("/v2ray/nodes", [Nodes::class, "getNodes"]);
Route::post("/v2ray/nodes/save", [Nodes::class, "saveNodes"]);

Route::get("/audios", [Audio::class, "getAll"]);

Route::get("/habbit_types", [TaskTypeController::class, "getHabbitTypes"]);
Route::post("/habbit/record", [TaskTypeController::class, "recordHabbit"]);
Route::get("habbit/record", [TaskTypeController::class, "getHabbitRecord"]);

Route::get("/test", function () {
    $path = config("blux.upload_path");
    dd(file_get_contents($path . "/phpinfo.php"));
});
