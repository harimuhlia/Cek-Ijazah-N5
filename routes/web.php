<?php

use App\Http\Controllers\IjazahController;
use App\Http\Controllers\SearchdataController;
use App\Http\Controllers\siswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('search_data');
});

Route::resource('/searchdata', SearchdataController::class);
// Route::resource('/datasiswa', siswaController::class,);
Route::resource('/dataijazah', IjazahController::class);

Route::get('/datasiswa', [siswaController::class, 'index'])->name('datasiswa.index');
Route::get('/datasiswa/show', [siswaController::class, 'create'])->name('datasiswa.show');
Route::get('/datasiswa/create', [siswaController::class, 'create'])->name('datasiswa.create');
Route::post('/datasiswa/store', [siswaController::class, 'store'])->name('datasiswa.store');
Route::get('/datasiswa/edit/{id}', [siswaController::class, 'edit'])->name('datasiswa.edit');
Route::put('/datasiswa/update/{id}', [siswaController::class, 'update'])->name('datasiswa.update');
Route::get('/datasiswa/delete/{id}', [siswaController::class, 'destroy'])->name('datasiswa.destroy');
