<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;

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

Route::resource('autores', AutorController::class)->middleware('auth');
Route::resource('libros', LibroController::class)->middleware('auth');


Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [LibroController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [LibroController::class, 'index'])->name('home');
    
});