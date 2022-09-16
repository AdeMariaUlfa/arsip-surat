<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController; 
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
    return redirect()->route('arsip.index')->name('arsip');
});

Route::resource('arsip', ArsipController::class);
Route::get('/detail/{noSurat}', [ArsipController::class,'showArsip'])->name('detail');
Route::get('/edit/{nomorSurat}', [ArsipController::class,'edit'])->name('edit');
Route::get('/download/{file}',  [ArsipController::class,'download'])->name('download');
Route::get('/destroy/{nomorSurat}', [ArsipController::class, 'destroy'])->name('destroy');
Route::get('/about', function () {
    return view('about');
})->name('about');
