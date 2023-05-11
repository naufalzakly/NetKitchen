<?php

use App\Http\Controllers\public\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\EnsureAuthCustomer;
use App\Models\Products;

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

// Route::get('/', function () {
//     return view('fe_layout/app');
// });

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.index');

// Route::get('/home', function () {
//     return view('admin.dashboard.index');
// })->name('dashboard.index');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(EnsureAuthCustomer::class)->group(function(){
    Route::prefix('customer')->name('customer.')->group(function(){
        Route::get('/', [CustomerController::class, 'index'])->name('home');
    });
});

// Route::get('/',[CustomerController::class,'index'])->name('fe_layout.app');
