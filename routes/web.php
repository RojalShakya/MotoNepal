<?php

use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Blog;
use Illuminate\Auth\Events\Login;

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('/post',[PostController::class,'index'])->name('blog-page');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginVerify'])->name('login');

Route::get('/dashboard',[DashboardController::class,'viewDash'])->name('dashboard')->middleware('login');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::post('/blog',[BlogController::class,'store'])->name('storeblog');
Route::get('/blog/view',[BlogController::class,'show'])->name('showblog');
Route::get('/blog/delete/{ids}',[BlogController::class,'destroy'])->name('destroy-blog');
Route::get('/blog/edit/{ids}',[BlogController::class,'edit'])->name('edit-blog');
Route::post('blog/edit/{ids}',[BlogController::class,'update'])->name('update-blog');


Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::post('/category',[CategoryController::class,'store'])->name('category');
Route::get('/category/show',[CategoryController::class,'show'])->name('showcategory');
