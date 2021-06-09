<?php

use App\Http\Controllers\WyborlekarzaController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\wizyty;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('showDoctor', [App\Http\Controllers\PanelRecepcji::class, 'showDoctor']);
Route::get('showWizytas/{id}', [App\Http\Controllers\PanelRecepcji::class, 'showWizytas']);

Route::get('/wybor-lekarza', [WyborlekarzaController::class, 'index'])->name('layouts.wyborlekarza');
Route::get('/odwolaj/{id}', [wizyty::class, 'cancel'])->name('wizyta.cancel');
Route::get('/przyjmij/{id}', [wizyty::class, 'apply'])->name('wizyta.apply');
Route::get('/cancel/{id}', [wizyty::class, 'cancel'])->name('wizyta.unaccept');
Route::get('/uncancel/{id}', [wizyty::class, 'uncancel'])->name('wizyta.uncancel');



Route::get('/wybor-lekarza/{id}', [WyborlekarzaController::class, 'kalendarz'])->name('layouts.kalendarzlekarza');
Route::post('/wybor-lekarza/rezerwacja', [WyborlekarzaController::class, 'rezerwacja'])->name('layouts.rezerwacjawizyty');
Route::get('/home', [dashboard::class, 'index'])->name('dashboard');
Route::get('/wizyty', [wizyty::class, 'lista'])->name('wizyty');
Route::get('/recepcja/wizyty', [wizyty::class, 'recepcja'])->name('wizyty.recepcja');
Route::get('/tworzenie-wizyt', function () {return view('tworzenieWizyt');});
Route::get('/recepta', function () {
    return view('recepta');
});

Route::get('change-password', 'App\Http\Controllers\ChangePasswordController@index');
Route::post('change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password');

