
<?php

use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::controller(FoodsController::class)->prefix('/foods')->group(function(){
//     Route::get('/', 'index')->name('foods');
//     Route::get('/tambah', 'tambah')->name('foods.tambah');
//     Route::post('/simpan', 'simpan')->name('foods.simpan');
//     Route::get('/edit/{id}', 'edit')->name('foods.edit');
//     Route::post('/update/{id}', 'update')->name('foods.update');
//     Route::get('/hapus/{id}', 'hapus')->name('foods.hapus');
// });

Route::controller(ReservationsController::class)->prefix('/reservations')->group(function(){
    Route::get('/', 'index')->name('reservations');
    Route::get('/tambah', 'tambah')->name('reservations.tambah');
    Route::post('/simpan', 'simpan')->name('reservations.simpan');
    Route::get('/edit/{id}', 'edit')->name('reservations.edit');
    Route::post('/update/{id}', 'update')->name('reservations.update');
    Route::get('/hapus/{id}', 'hapus')->name('reservations.hapus');

});