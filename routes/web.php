<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductaddController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
// Route::get('package-list', [ProductaddController::class, 'packageList']);
// Add Package
// Route::get('add-product', [ProductaddController::class, 'addPackageView']);
// Route::post('add-product', [ProductaddController::class, 'addPackage']);
//Edit Package
// Route::get('package-edit/{id}', [ProductaddController::class, 'editPackage']);
// Route::put('update-product/{id}', [ProductaddController::class, 'updatePackage']);
//delete Package
// Route::get('package-delete/{id}', [ProductaddController::class, 'deletePackage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function ()
{
    Route::get('/dashboard',[DashboardController::class,'index']);

    //Package list
    Route::get('/package-list', [ProductaddController::class, 'packageList']);

    // Add Package
    Route::get('/add-product', [ProductaddController::class, 'addPackageView']);
    Route::post('/add-product', [ProductaddController::class, 'addPackage']);

    //Edit Package
    Route::get('/package-edit/{id}', [ProductaddController::class, 'editPackage']);
    Route::put('/update-product/{id}', [ProductaddController::class, 'updatePackage']);

    //delete Package
    Route::get('/package-delete/{id}', [ProductaddController::class, 'deletePackage']);

    //Orders
    Route::get('/order-list', [OrderController::class, 'OrderList']);

    Route::get('/order-edit/{id}', [OrderController::class, 'editOrder']);
    // Route::get('/order-edit/{id}', [OrderController::class, 'inspectorList']);
    Route::put('/update-order/{id}', [OrderController::class, 'updateorder']);

    //Customer
    Route::get('/customers-list', [UserController::class, 'customerList']);

    Route::get('/customers-edit/{id}', [UserController::class, 'editCustomers']);
    Route::put('/update-customers/{id}', [UserController::class, 'updateCustomers']);

    Route::get('/customers-delete/{id}', [UserController::class, 'deleteCustomers']);

    //Inspector
    Route::get('/inspector-list', [UserController::class, 'inspectorList']);

    // Route::get('/customers-edit/{id}', [UserController::class, 'editCustomers']);
    // Route::put('/update-customers/{id}', [UserController::class, 'updateCustomers']);

    //categories
    Route::get('/category-list', [CategoryController::class, 'categoryList']);

    Route::get('/add-category', [CategoryController::class, 'addCategoryView']);
    Route::post('/add-category', [CategoryController::class, 'addCategory']);

    Route::get('/category-edit/{id}', [CategoryController::class, 'editCategory']);
    Route::put('/update-category/{id}', [CategoryController::class, 'updateCategory']);

    Route::get('/category-delete/{id}', [CategoryController::class, 'deleteCategory']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
