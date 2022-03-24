<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductaddController;
use App\Http\Controllers\Admin\DashboardController;

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
    return view('auth.login');
});
//Package list
Route::get('package-list', [ProductaddController::class, 'packageList']);
// Add Package
Route::get('add-product', [ProductaddController::class, 'addPackageView']);
Route::post('add-product', [ProductaddController::class, 'addPackage']);
//Edit Package
Route::get('package-edit/{id}', [ProductaddController::class, 'editPackage']);
Route::put('update-product/{id}', [ProductaddController::class, 'updatePackage']);
//delete Package
Route::get('package-delete/{id}', [ProductaddController::class, 'deletePackage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function ()
{
    Route::get('/dashboard',[DashboardController::class,'index']);

    Route::get('/package-list', [ProductaddController::class, 'packageList']);

    Route::get('/add-product', [ProductaddController::class, 'addPackageView']);
    Route::post('/add-product', [ProductaddController::class, 'addPackage']);

    Route::get('/package-edit/{id}', [ProductaddController::class, 'editPackage']);
    Route::put('/update-product/{id}', [ProductaddController::class, 'updatePackage']);

    Route::get('/package-delete/{id}', [ProductaddController::class, 'deletePackage']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
