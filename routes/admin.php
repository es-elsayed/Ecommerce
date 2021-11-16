<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
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

Route::name('admin.')->group(function () {

    Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('getlogin');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });
    // **********************************************
    // ********* Admin Authenicated Routes **********
    // **********************************************
    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

        // ******************************************
        // ********* Main Category Routes ***********
        // ******************************************
        Route::group(['prefix' => 'main-category'], function () {
            Route::get('/', [MainCategoryController::class, 'index'])->name('maincategory');
            Route::get('/create', [MainCategoryController::class, 'create'])->name('maincategory.create');
            Route::post('/store', [MainCategoryController::class, 'store'])->name('maincategory.store');
            Route::get('/active/{id}', [MainCategoryController::class, 'active'])->name('maincategory.active');
            Route::get('/un-active/{id}', [MainCategoryController::class, 'unActive'])->name('maincategory.unactive');
            Route::get('/delete/{id}', [MainCategoryController::class, 'destroy'])->name('maincategory.delete');
            Route::get('/{slug}/edit', [MainCategoryController::class, 'edit'])->name('maincategory.edit');
            Route::put('/{slug}/update', [MainCategoryController::class, 'update'])->name('maincategory.update');
        });
        // *****************************************
        // ********** Sub Category Routes **********
        // *****************************************
        Route::group(['prefix' => 'sub-category'], function () {
            Route::get('/', [SubCategoryController::class, 'index'])->name('subcategory');
            Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
            Route::post('/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
            Route::get('/active/{slug}', [SubCategoryController::class, 'active'])->name('subcategory.active');
            Route::get('/un-active/{slug}', [SubCategoryController::class, 'unActive'])->name('subcategory.unactive');
            Route::get('/delete/{slug}', [SubCategoryController::class, 'destroy'])->name('subcategory.delete');
            Route::get('/{slug}/edit', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
            Route::put('/{slug}/update', [SubCategoryController::class, 'update'])->name('subcategory.update');
        });
        // *****************************************
        // ********** Product Routes **********
        // *****************************************
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('product');
            Route::get('/create', [ProductController::class, 'create'])->name('product.create');
            Route::post('/store', [ProductController::class, 'store'])->name('product.store');
            Route::get('/active/{slug}', [ProductController::class, 'active'])->name('product.active');
            Route::get('/un-active/{slug}', [ProductController::class, 'unActive'])->name('product.unactive');
            Route::get('/delete/{slug}', [ProductController::class, 'destroy'])->name('product.delete');
            Route::get('/{slug}/edit', [ProductController::class, 'edit'])->name('product.edit');
            Route::put('/{slug}/update', [ProductController::class, 'update'])->name('product.update');
        });
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
