<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\DapurkasirController;
use App\Http\Controllers\MenuController;

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

Route::get('/tes', function () {
    return view('admin.toko.index');
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
    // Akses Super Admin
    // Route::group(['middleware' => ['checkRole:super_admin']], function () {
    Route::get('/dashboard', [HomeController::class, 'index2']);
    //Kelola_resto
    Route::get('/kelola_resto', [RestoController::class, 'index'])->name('kelola-resto');
    Route::get('/resto/getdata/{id}', [RestoController::class, 'getdata'])->name('getdataresto');
    Route::post('/resto/input', [RestoController::class, 'store'])->name('resto-input');
    Route::post('/resto/update', [RestoController::class, 'update'])->name('update-resto');
    Route::get('/resto/hapus/{id}', [RestoController::class, 'destroy'])->name('hapus-resto');
    Route::get('/changeOperasional', [RestoController::class, 'changeOperasional'])->name('changeOperasional');
    //Kelola_user
    Route::get('/kelola_user', [UserController::class, 'index'])->name('kelola-user');
    Route::get('/user/getdata/{id}', [UserController::class, 'getdata'])->name('getdatauser');
    Route::post('/user/input', [UserController::class, 'store'])->name('user-input');
    Route::post('/user/update', [UserController::class, 'update'])->name('update-user');
    Route::get('/user/hapus/{id}', [UserController::class, 'destroy'])->name('hapus-user');
    // });

    // Route::group(['middleware' => ['checkRole:admin']], function () {
    Route::get('/kelola_user_dapur_kasir', [DapurkasirController::class, 'index']);
    Route::get('/user_dapur_kasir/getdata/{id}', [DapurkasirController::class, 'getdata']);
    Route::post('/user_dapur_kasir/input', [DapurkasirController::class, 'store']);
    Route::post('/user_dapur_kasir/update', [DapurkasirController::class, 'update']);
    Route::get('/user_dapur_kasir/hapus/{id}', [DapurkasirController::class, 'destroy']);
    // });

    // Route::group(['middleware' => ['checkRole:dapur']], function () {
    Route::get('/kelola_menu', [MenuController::class, 'index']);
    Route::get('/menu/getdata/{id}', [MenuController::class, 'getdata']);
    Route::post('/menu/input', [MenuController::class, 'store']);
    Route::post('/menu/update', [MenuController::class, 'update']);
    Route::get('/menu/hapus/{id}', [MenuController::class, 'destroy']);
    // });

    // Akses User
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/input', [ProfileController::class, 'store']);
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword']);
    Route::post('/upload/avatar', [ProfileController::class, 'updateAvatar'])->name('upload.avatar');
});
