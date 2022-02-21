<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [HomeController::class, 'index']);

Route::prefix('Category')->group(function () {
    Route::get('/marbel-edu-games', [DaftarProductController::class, 'marbel']);
    Route::get('/marbel-and-friends-kids-games', [DaftarProductController::class, 'marbelandfriends']);
    Route::get('/riri-story-books', [DaftarProductController::class, 'riri']);
    Route::get('/kolak-kids-songs', [DaftarProductController::class, 'kolak']);
});

Route::get('/News', [NewsController::class, 'news']);
Route::get('/News/{judul}', [NewsController::class, 'news']);

Route::prefix('Program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'Karir']);
    Route::get('/magang', [ProgramController::class, 'Magang']);
    Route::get('/kunjungan-indistri', [ProgramController::class, 'KunjunganIndustri']);
});

Route::get('/about-us', function () {
    echo "TENTANG KAMI";
});

Route::resource('contact-us', ContactUsController::class);