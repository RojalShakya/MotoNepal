<?php

use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Auth\Events\Login;

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('/post',[PostController::class,'index']);

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginVerify'])->name('login');

Route::get('/dashboard',[DashboardController::class,'viewDash'])->name('dashboard')->middleware('login');
Route::get('/blogs',[BlogController::class,'index'])->name('blog');
Route::post('/blogs',[BlogController::class,'store'])->name('blog');
Route::get('/blog/view',[BlogController::class,'show'])->name('showblog');


Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::post('/category',[CategoryController::class,'store'])->name('category');
