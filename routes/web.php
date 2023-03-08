<?php

use App\Http\Controllers\MahasiswaController;
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
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/insert', [MahasiswaController::class, 'insert']);
Route::get('/update/{nim}', [MahasiswaController::class, 'update']);
Route::get('/delete/{nim}', [MahasiswaController::class, 'delete']);
Route::post('/save', [MahasiswaController::class, 'save']);
Route::put('/updated/{nim}', [MahasiswaController::class, 'updated']);
