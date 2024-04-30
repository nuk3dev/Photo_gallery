<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/albums/{id}', [IndexController::class, 'photosPerAlbumId'])->where('id', '[0-9]+');


Route::get('/dashboard', function () {
    return view('management.dashboard');
})->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard/albums/editAlbum/{id}', [DashboardController::class, 'photosByAlbumId'])->where('id', '[0-9]+');
    Route::get('/dashboard/albums/selectPhotobyalbum/{id}', [DashboardController::class, 'selectPhotobyalbum'])->where('id', '[0-9]+');
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/dashboard/albums', [DashboardController::class, 'albums']);
    Route::post('/dashboard/insertAlbum', [DashboardController::class, 'insertAlbum']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/albums/{id}', [IndexController::class, 'photosPerAlbumId'])->where('id', '[0-9]+');
//Route::get('/dashboard/albums/editAlbum/{id}', [DashboardController::class, 'photosByAlbumId'])->where('id', '[0-9]+');
//Route::get('/dashboard/albums/selectPhotobyalbum/{id}', [DashboardController::class, 'selectPhotobyalbum'])->where('id', '[0-9]+');
//Route::get('/dashboard/albums', [DashboardController::class, 'albums']);
//Route::post('/dashboard/insertAlbum', [DashboardController::class, 'insertAlbum']);


require __DIR__.'/auth.php';
