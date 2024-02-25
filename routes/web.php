<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\{
    KelassController,
    PetugassController,
    SppController,
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

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard/admin', 'admin')->name('dashboard.admin');
    Route::post('/dashboard/petugas', 'petugas')->name('dashboard.petugas');
    Route::post('/dashboard/siswa', 'siswa')->name('dashboard.siswa');
});

Route::resource('/petugas', PetugassController::class);
Route::resource('/kelas', KelassController::class);
Route::resource('/spp', SppController::class);

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});
