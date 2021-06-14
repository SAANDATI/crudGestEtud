<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\UniversiteController;
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

Route::resource('universites', UniversiteController::class)->middleware('auth');
Route::resource('classes', ClasseController::class)->middleware('auth');
Route::resource('etudiants', EtudiantController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';