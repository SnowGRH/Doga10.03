<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('api/User', [TaskController::class,'index']);
Route::get('api/User/{id}', [TaskController::class,'show']);
Route::post('api/User', [TaskController::class,'store']);
Route::put('api/User/{id}', [TaskController::class,'update']);
Route::delete('api/User/{id}', [TaskController::class,'destroy']);
//view
Route::get('/User/list', [TaskController::class,'listView']);
Route::get('/User/new', [TaskController::class,'newView']);
