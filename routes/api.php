<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyTask;
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

Route::get("/tasktypes", [TaskTypeController::class, 'getTypes']);
Route::post("/task/types/order", [TaskTypeController::class, 'setOrder']);
Route::post("/task/type/addoredit", [TaskTypeController::class, 'addOrEditType']);

Route::get('/video/{id}', [VideoController::class, 'getById']);



Route::get("/phone/apps", [PhoneUsage::class, "getApps"]);
Route::get("/phone/usages", [PhoneUsage::class, "getUsages"]);

Route::post("/phone/usages",[PhoneUsage::class, "dealUsages"]);
