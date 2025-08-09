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
Route::get('/layanan/{jenis}', [HomeController::class, 'layanan'])->name('layanan.show');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
 Route::patch('banners/{banner}/set-active', [BannerController::class, 'setActive'])->name('banners.setActive');
 Route::resource('banners', BannerController::class);