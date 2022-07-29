<?php

use App\Models\Post;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardImageController;
use App\Http\Controllers\DashboardAuthorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Author
Route::get('/author', [AuthorController::class, 'index']);
Route::get('/author/{author:username}', [AuthorController::class, 'show']);
Route::resource('/dashboard/author', DashboardAuthorController::class)->middleware('auth');

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/page/{n}', [HomeController::class, 'pagination']);

// Post
Route::get('/{post:slug}', [PostController::class, 'show']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Category
Route::get('/category/{category:slug}', [CategoryController::class, 'show']);


// Author
Route::resource('/dashboard/author', DashboardAuthorController::class)->middleware('auth');
// Image
Route::resource('/dashboard/image', DashboardImageController::class)->middleware('auth');

// Search
Route::post('/search', [HomeController::class, 'search']);
Route::get('/search/{keyword}', [HomeController::class, 'searched']);