<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatajurusanController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\IjazahController;
use App\Http\Controllers\SearchdataController;
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

Route::resource('/dashboard', DashboardController::class,);
Route::get('/searchdata', [SearchdataController::class, 'index']);
Route::resource('datajurusan', DatajurusanController::class);
Route::resource('/datasiswa', DatasiswaController::class,);
Route::resource('/dataijazah', IjazahController::class);
