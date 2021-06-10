<?php

use App\Http\Controllers\WyborlekarzaController;
use App\Http\Controllers\ReceptaController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\wizyty;
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
Route::post('/wybor-lekarza/rezerwacja', [WyborlekarzaController::class, 'rezerwacja'])->name('layouts.rezerwacjawizyty');

Route::get('/home', [dashboard::class, 'index'])->name('dashboard');

Route::get('/odwolaj/{id}', [wizyty::class, 'unaccept'])->name('wizyta.cancel');
Route::get('/przyjmij/{id}', [wizyty::class, 'apply'])->name('wizyta.apply');
Route::get('/cancel/{id}', [wizyty::class, 'cancel'])->name('wizyta.unaccept');
Route::get('/uncancel/{id}', [wizyty::class, 'uncancel'])->name('wizyta.uncancel');

Route::get('/wizyty', [wizyty::class, 'lista'])->name('wizyty');
Route::get('/recepcja/wizyty', [wizyty::class, 'recepcja'])->name('wizyty.recepcja');
Route::get('/tworzenie-wizyt', [wizyty::class, 'doctors'])->name('wizyty.tworzenie');
Route::post('/tworzenie-wizyt/dodaj', [wizyty::class, 'Generowaniewizyt'])->name('wizyty.generowaniewizyt');

Route::POST('tworzenie/dodaj', [ReceptaController::class, 'addrecepta'])->name('dodanieRecepty');
Route::get('recepta/{id}', [ReceptaController::class, 'show'])->name('recepta');
Route::get('tworzenie/{id}', [ReceptaController::class, 'wizytasforecepta'])->name('tworzenieRecepty');

Route::get('change-password', 'App\Http\Controllers\ChangePasswordController@index');
Route::post('change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password');
