<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
// Route::middleware(['auth'])->prefix('admin')->group(function () {
//     Route::get('/', [AdminController::class, 'index']); // Trang admin chính
//     Route::get('/create', [AdminController::class, 'create']); // Trang tạo mới
//     // Thêm các route khác liên quan đến admin ở đây
// });
Route::get('/', [CategoryController::class,'index'])->name('index');
Route::get('/listposts/{id}', [PostController::class,'index'])->name('posts.list');
Route::get('/detailpost/{id}', [PostController::class,'show'])->name('detail.list');
Route::get('/login', function () {
    return view('client.login.login');
})->name('login');
Route::get('/register', function () {
    return view('client.login.register');
})->name('register');
Route::post('/login', [AuthController::class,'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class,'register'])->name('register.submit');
// Route::get('/cl', function () {
//     return view('client.index');
// });
