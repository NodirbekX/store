<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\pageController::class, 'home'])->name('home'); // Home page
Route::get('/shop', [\App\Http\Controllers\pageController::class, 'index'])->name('shop.index'); // Shop page
Route::get('/about', [\App\Http\Controllers\pageController::class, 'about'])->name('about'); // About page
Route::get('/contact', [\App\Http\Controllers\pageController::class, 'contact'])->name('contact'); // Contact page
Route::post('/contact/post', [\App\Http\Controllers\pageController::class, 'contact_post'])->name('contact.submit');

//Route::get('post',[\App\Http\Controllers\postsController::class,'index']);
//Route::get('/post/{post}',[\App\Http\Controllers\postsController::class,'show'])->name('post.show');
//Route::get('/post/create',[\App\Http\Controllers\postsController::class,'create'])->name('post.create');
//Route::post('post/create',[\App\Http\Controllers\postsController::class,'store'])->name('post.store');
//Route::get('/post/{post}/edit',[\App\Http\Controllers\postsController::class,'edit'])->name('post.edit');
//Route::put('/post/{post}/edit',[\App\Http\Controllers\postsController::class,'update'])->name('post.edit');
//Route::delete('/post/{post}/delete',[\App\Http\Controllers\postsController::class,'delete'])->name('post.delete');

Route::resource('posts',\App\Http\Controllers\PostController::class);
Route::get('test',[pageController::class,'test']);

