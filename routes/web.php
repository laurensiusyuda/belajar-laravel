<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
//8. login
Route::get('login',[AuthController::class,'login']);
//9. login
Route::post('login',[AuthController::class,'authenticate']);
//10. Log-Out
Route::get('logout',[AuthController::class,'logout']);
//11. Register
Route::get('register',[AuthController::class,'register_form']);
Route::post('register',[AuthController::class,'register']);

//1. get data
Route::get('posts', [PostController::class,'index']);
//2.  create
Route::get('posts/create', [PostController::class,'create']);
//3. post data
Route::post('posts', [PostController::class,'store']);
//4. get data by id
Route::get('posts/{slug}', [PostController::class, 'show']);
// Route::get('posts/{id}', [PostController::class,'show']);
//5. edit
Route::get('posts/{id}/edit', [PostController::class,'edit']);
// Route::get('posts/{id}/edit', [PostController::class,'edit']);
//6. update
Route::patch('posts/{id}', [PostController::class,'update']);
//7. Destroy (Delete)
Route::delete('posts/{id}', [PostController::class,'destroy']);


