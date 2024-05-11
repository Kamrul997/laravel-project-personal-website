<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;



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



Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home.page');
Route::get('/about', [AboutController::class, 'index'])->name('about.page');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.page');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.page');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.page');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.page');


//admin panel routes

Route::namespace('admin')->middleware('guest')->group(function () {

    Route::get('/admin/login', [AuthController::class, 'index'])->name('login');

    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
});

Route::namespace('admin')->middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');


});

