<?php

use App\Http\Controllers\WyborlekarzaController;
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
    return view('layouts/app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wybor-lekarza', [WyborlekarzaController::class, 'index'])->name('layouts.wyborlekarza');
Route::get('/wybor-lekarza/{id}', [WyborlekarzaController::class, 'kalendarz'])->name('layouts.kalendarzlekarza');
