<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistController;

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
    return view('landing');
});

Route::get('/masuk', function () {
    return view('login');
})-> name('masuk');

Route::post('/masuk', [LoginController::class,'login']);
Route::get('daftar', [RegistController::class,'index'])->name('daftar');
Route::post('daftar', [RegistController::class,'store']);
Route::get('profile/{id}', [ProfileController::class,'show']);
Route::post('/profile', [LoginController::class,'login']);
Route::get('/edit/{id}', [ProfileController::class,'edit']);
Route::post('/edit/{id}', [ProfileController::class,'update']);
Route::get('/logout', [ProfileController::class,'logout']);