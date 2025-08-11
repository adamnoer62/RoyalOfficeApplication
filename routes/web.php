<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\HomeController;
Use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ServiceController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route ::get('/', [App\Http\Controllers\HomeController::class, 'halamandepan'])->name('halamandepan');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/layanan/{jenis}', [HomeController::class, 'layanan'])->name('layanan.show');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/blog/{blog}', [HomeController::class, 'detail'])->name('detail.show');
Route::get('/contact/form', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/', [ContactController::class, 'store'])->name('contact.store');



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
 Route::patch('banners/{banner}/set-active', [BannerController::class, 'setActive'])->name('banners.setActive');
 Route::resource('banners', BannerController::class);
 Route::resource('testimonials', TestimonialController::class);
 Route::resource('services', ServiceController::class);

 Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs.index');
 Route::get('/blogs/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blogs.create'); // MOVED UP
 Route::post('/blogs', [App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');
 Route::get('/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show'); // Now after create
 Route::get('/blogs/{blog}/edit', [App\Http\Controllers\BlogController::class, 'edit'])->name('blogs.edit');
 Route::put('/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'update'])->name('blogs.update');
 Route::delete('/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy');
 

Route::get('/faqs', [App\Http\Controllers\FaqController::class, 'index'])->name('faqs.index');
Route::get('/faqs/create', [App\Http\Controllers\FaqController::class, 'create'])->name('faqs.create');
Route::post('/faqs', [App\Http\Controllers\FaqController::class, 'store'])->name('faqs.store');
Route::get('/faqs/{faq}/edit', [App\Http\Controllers\FaqController::class, 'edit'])->name('faqs.edit');
Route::put('/faqs/{faq}', [App\Http\Controllers\FaqController::class, 'update'])->name('faqs.update');
Route::delete('/faqs/{faq}', [App\Http\Controllers\FaqController::class, 'destroy'])->name('faqs.destroy');

Route::get ('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
Route::delete('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contacts.destroy');

