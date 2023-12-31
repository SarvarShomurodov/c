<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/project_request',[ProjectController::class,'index']);
Route::get('posts/request_app',[ProjectController::class,'store']);
Route::get('/project_request/{id}',[ProjectController::class,'index']);
Route::get('posts/update', [ProjectController::class, 'update']);
Route::get('posts/delete', [ProjectController::class, 'delete']);

