<?php

use App\Http\Controllers\OutilController;
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
})->name('home');

Route::get('impact', function () {
    return view('impact');
})->name('impact');

Route::get('enjeux', function () {
    return view('enjeux');
})->name('enjeux');

Route::get('outils', [OutilController::class, 'index'])->name('outils');

Route::get('management', function () {
    return view('management');
})->name('management');