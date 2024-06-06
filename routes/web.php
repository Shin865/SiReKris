<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardingController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\LaporanController;

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
Route::middleware(['guest:pelapor'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
    Route::get('/auth/google', [AuthController::class, 'redirect'])->name('google-auth');
    Route::get('/auth/google/call-back', [AuthController::class, 'callbackGoogle']);
});

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/panel', function () {
        return view('auth.loginadmin');
    })->name('loginadmin');

    Route::post('/prosesloginadmin', [AuthController::class, 'prosesloginadmin']);
});

Route::middleware('auth:pelapor')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/proseslogout', [AuthController::class, 'proseslogout']);

    Route::get('/pelaporan', [PelaporanController::class, 'index']);
    Route::post('/pelaporan/store', [PelaporanController::class, 'store']);
    Route::post('/pelaporan/edit', [PelaporanController::class, 'edit']);
    Route::post('/pelaporan/{kode_lapor}/update', [PelaporanController::class, 'update']);
    Route::post('/pelaporan/{kode_lapor}/delete', [PelaporanController::class, 'delete']);

    Route::get('/profil', [AkunController::class, 'index']);
    Route::post('/profil/{id_pela}/updateprofile', [AkunController::class, 'updateprofile']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/proseslogoutadmin', [AuthController::class, 'proseslogoutadmin']);
    Route::get('/dashboardadmin', [DashboardController::class, 'dashboardadmin']);

    Route::get('/laporanadmin', [LaporanController::class, 'laporanadmin']);
    Route::post('/cetaklaporanadmin', [LaporanController::class, 'cetaklaporanadmin']);

    Route::get('/aksi', [LaporanController::class, 'aksi']);
    Route::post('/aksi/approve', [LaporanController::class, 'approve']);
    Route::get('/aksi/{kode_lapor}/batalkan', [LaporanController::class, 'batalkan']);

    Route::get('/akunlist', [AkunController::class, 'akunlist']);
});

    Route::get('/', [BoardingController::class, 'boarding']);
    Route::get('/akun', [BoardingController::class, 'akun']);
    Route::post('/akun/register', [BoardingController::class, 'register']);
    Route::get('/laporan', [LaporanController::class, 'laporan']);
    Route::post('/laporan/cetaklaporan', [LaporanController::class, 'cetaklaporan']);