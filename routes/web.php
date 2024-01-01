<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::post('/search', [ProductController::class, 'search']);

Route::middleware(['guest'])->group(function () {
    Route::get('/dashboard/login', [UserController::class, 'login'])->name('dashboard.login');
    Route::post('/dashboard/login', [UserController::class, 'auth']);
    Route::get('/dashboard/register', [UserController::class, 'register']);
    Route::post('/dashboard/register', [UserController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});