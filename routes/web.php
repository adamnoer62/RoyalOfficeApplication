<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\HomeController; // Tambahkan ini

// Route::get('/', function () {
//     return view('welcome');
// });

Route ::get('/', [App\Http\Controllers\HomeController::class, 'halamandepan'])->name('halamandepan');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::patch('banners/{banner}/set-active', [BannerController::class, 'setActive'])->name('banners.setActive');
 Route::resource('banners', BannerController::class);