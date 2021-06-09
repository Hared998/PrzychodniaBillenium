<?php

use App\Http\Controllers\WyborlekarzaController;
use App\Http\Controllers\ReceptaController;
use App\Http\Controllers\dashboard;
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
    return view('auth/login');
});

Auth::routes();


Route::get('/wybor-lekarza', [WyborlekarzaController::class, 'index'])->name('layouts.wyborlekarza');

Route::get('/wybor-lekarza/{id}', [WyborlekarzaController::class, 'kalendarz'])->name('layouts.kalendarzlekarza');

Route::get('/home', [dashboard::class, 'index'])->name('dashboard');

Route::get('/recepta', function () {
    return view('recepta');
});
Route::get('recepta/{id}', [ReceptaController::class, 'show'])->name('recepta');

Route::get('change-password', 'App\Http\Controllers\ChangePasswordController@index');
Route::post('change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password');
