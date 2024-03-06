<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\{
    KelassController,
    PetugassController,
    SppController,
    SiswasController,
    PembayaransController,
    RegisterController,
    AuthController,
    DashboardController,
};

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

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['guest'])->group(function() {
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'login')->name('auth.login');
        Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
    });

    Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});
});

Route::middleware(['can:isAdmin'])->group(function() {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
});

Route::middleware(['can:isPetugas'])->group(function() {
    Route::get('/dashboard/petugas', [DashboardController::class, 'petugas'])->name('dashboard.petugas');
});

Route::middleware(['can:isSiswa'])->group(function() {
    Route::get('/dashboard/siswa', [DashboardController::class, 'siswa'])->name('dashboard.siswa');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');

Route::resource('/petugas', PetugassController::class);
Route::resource('/kelas', KelassController::class);
Route::resource('/spp', SppController::class);
Route::resource('/siswa', SiswasController::class);
Route::resource('/pembayaran', PembayaransController::class);
