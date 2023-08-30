<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSiswaController;
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

// Route::resource('DataSiswa', DataSiswaController::class);
Route::get('DataSiswa', [DataSiswaController::class, 'index'])->name('datasiswa.index');
Route::get('DataSiswa-create', [DataSiswaController::class, 'create'])->name('datasiswa.create');
Route::post('DataSiswa-store', [DataSiswaController::class, 'store'])->name('datasiswa.store');

Route::get('DataSiswa-show/{id}', [DataSiswaController::class, 'show'])->name('datasiswa.show');
Route::get('DataSiswa-edit/{id}', [DataSiswaController::class, 'edit'])->name('datasiswa.edit');
Route::delete('DataSiswa-delete/{id}', [DataSiswaController::class, 'destroy'])->name('datasiswa.destroy');

Route::post('DataSiswa-update/{id}', [DataSiswaController::class, 'update'])->name('datasiswa.update');
