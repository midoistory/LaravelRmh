<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;

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

// route untuk mengelola spp controller
Route::controller(SppController::class)->group(function(){
    route::get('/spp', [SppController::class, 'index'])->name('spp.index');
    route::get('/spp/create', [SppController::class, 'create'])->name('spp.create');
    route::post('/spp', [SppController::class, 'store'])->name('spp.store');
    route::get('/spp/{id}', [SppController::class, 'show'])->name('spp.show');
    route::get('/spp/{id}/edit', [SppController::class, 'edit'])->name('spp.edit');
    route::put('/spp/{id}', [SppController::class, 'update'])->name('spp.update');
    Route::delete('/spp/{id}', [SppController::class, 'destroy'])->name('spp.delete');
});
