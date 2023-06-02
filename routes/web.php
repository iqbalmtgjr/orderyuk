<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacebookController;

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
    return view('layouts.user.master');
});
// Route::get('/rumah', function () {
//     return view('layouts.master');
// });

Auth::routes();


//Login FB
Route::controller(FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});

//Login Google
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::group(['middleware' => ['isLogin']], function () {
    // Akses User
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/input', [ProfileController::class, 'store']);
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword']);
    Route::post('/upload/avatar', [ProfileController::class, 'updateAvatar'])->name('upload.avatar');
    // Akses Admin
    Route::group(['middleware' => ['checkRole:admin']], function () {
        // Masih Kosong
    });
});
