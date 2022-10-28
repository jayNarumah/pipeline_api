<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatisticController;

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

Route::post('/auth/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/auth/logout', [App\Http\Controllers\AuthController::class, 'logout']);


Route::apiResource('pipeline', App\Http\Controllers\PipelineController::class);
Route::apiResource('pipeline-type', App\Http\Controllers\PipelineTypeController::class);
Route::apiResource('pipeline-route', App\Http\Controllers\PipelineROUTEController::class);
Route::apiResource('company', App\Http\Controllers\CompanyController::class);
Route::get('/type-count', [StatisticController::class, 'pipelineTypeCount']);
Route::get('/pipeline-count', [StatisticController::class, 'pipelineTypeCount']);
Route::get('/company-count', [StatisticController::class, 'pipelineTypeCount']);

Route::group(['middleware' => 'auth:sanctum',], function (){

});