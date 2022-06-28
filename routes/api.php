<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyTask;
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

Route::post('/task/mark', [DailyTask::class,'mark']);
Route::get('/tasks/daily/{timestamp}', [DailyTask::class,'viewDaily']);
Route::get("/tasks/contribution/{type}",[]);

Route::get("/tasktypes",[TaskTypeController::class,'getTypes']);

Route::get('/video/{id}', [VideoController::class,'getById']);
