<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\{
    KelassController,
    PetugassController,
    SppController,
    RegisterController,
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

Route::resource('/petugas', PetugassController::class);
Route::resource('/kelas', KelassController::class);
Route::resource('/spp', SppController::class);

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});
