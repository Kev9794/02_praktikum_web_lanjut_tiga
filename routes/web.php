<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HalamanProducts;
use App\Http\Controllers\HalamanNews;
use App\Http\Controllers\HalamanProgram;
use App\Http\Controllers\HalamanAboutUs;
use App\Http\Controllers\HalamanContactUs;

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

Route ::get('/home', [HalamanHome::class,'home']);

Route :: prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [HalamanProducts::class, 'prod1']);
    Route::get('/marbel-and-friends-kids-games', [HalamanProducts::class, 'prod2']);
    Route::get('/riri-story-books', [HalamanProducts::class, 'prod3']);
    Route::get('/kolak-kids-songs', [HalamanProducts::class, 'prod4']);
});

Route ::get('/news/{id}', [HalamanNews::class,'news']);

Route :: prefix('program')->group(function(){
    Route::get('/karir', [HalamanProgram::class, 'prog1']);
    Route::get('/magang', [HalamanProgram::class, 'prog2']);
    Route::get('/kunjungan-industri', [HalamanProgram::class, 'prog3']);
});

Route ::get('/about-us', [HalamanAboutUs::class,'about']);

Route ::get('/contact-us', [HalamanContactUs::class,'contact']);
