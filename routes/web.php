<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;



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

// ======================================================

// PRAKTIKUM 1

// Route::get('/', function () {
//     return "Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function () {
//     return "NIM  : 2041720230 </br>
//             Nama : Ahmad Rafif Alaudin </br>
//             Kelas: TI 2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Ini adalah halaman Artikel dengan ID: {$id}";
// });

// ======================================================

// PRAKTIKUM 2

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// ======================================================

// PRAKTIKUM 2

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/articles/{id}', [ArticleController::class, 'index']);

// ======================================================

// PRAKTIKUM 3

// Home
// Route::get('/', function () {
//     return "Ini halaman Home";
// });

// Products
// Route::get('/products', [ProductsController::class, 'index']);
// Route::prefix('products')->group(function () {

//     Route::get('/marbel-edu-games', [ProductsController::class, 'marbelEduGames']);

//     Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'marbelAndFriendsKidsGames']);

//     Route::get('/riri-story-books', [ProductsController::class, 'ririStoryBooks']);

//     Route::get('/kolak-kids-songs', [ProductsController::class, 'kolakKidsSongs']);
// });

// News
// Route::get('/news', [NewsController::class, 'index']);
// Route::get('/news/{judul}', [NewsController::class, 'newsParam']);

// Program
// Route::get('/program', [ProgramController::class, 'index']);
// Route::prefix('program')->group(function () {

//     Route::get('/karir', [ProgramController::class, 'karir']);

//     Route::get('/magang', [ProgramController::class, 'magang']);

//     Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
// });

// About Us
// Route::get('/about-us', [AboutUsController::class, 'index']);

// ======================================================

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
