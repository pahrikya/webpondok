<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KitabController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TahfidzController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('home', function () {
//     return view('pages.home');
// });
// Route::get('profile', function () {
//     return view('pages.profile');
// });
 
Route::get('/home', [HomeController::class, 'index']) ->name('home');
Route::get('/berita', [BeritaController::class, 'index']) ->name('berita');
Route::get('/ekstra', [EkstraController::class, 'index']) ->name('ekstra');
Route::get('/ppdb', [PpdbController::class, 'index']) ->name('ppdb');
Route::get('/profile', [ProfileController::class, 'index']) ->name('profile');
Route::get('/tahfidz', [TahfidzController::class, 'index']) ->name('tahfidz');
Route::get('/kitab', [KitabController::class, 'index']) ->name('kitab');

// admin
Route::get('/admin/kitab', [KitabController::class, 'admin']) ->name('admin.kitab');
Route::get('/admin/extra', [EkstraController::class, 'test']) ->name('admin.ekstra');

