<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

//Auth Controller
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/authenticate', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Home
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::prefix('admin')->group(function () {
    //Admin Home
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin_index');

    //User
    Route::get('/user/create', [UserController::class, 'create'])->name('user_create');
    Route::post('/user/create/store', [UserController::class, 'store'])->name('user_store');

    //Dosen Controller
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen_index');
    Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen_create');
    Route::post('/dosen/create/store', [DosenController::class, 'store'])->name('dosen_store');

    //Mahasiswa Controller
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa_index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa_create');
    Route::post('/mahasiswa/create/store', [MahasiswaController::class, 'store'])->name('mahasiswa_store');
});