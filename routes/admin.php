<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
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
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::resource('orders', OrderController::class, ['as' => 'admin']);
    // ********* Main Category Routes ***********
    Route::resource('maincategory', MainCategoryController::class, ['as' => 'admin']);
    Route::get('maincategory/active/{id}', [MainCategoryController::class, 'active'])->name('admin.maincategory.active');
    Route::get('maincategory/unactive/{id}', [MainCategoryController::class, 'unActive'])->name('admin.maincategory.unactive');

    // ********** Sub Category Routes **********
    Route::resource('subcategory', SubCategoryController::class, ['as' => 'admin']);
    Route::get('subcategory/active/{id}', [SubCategoryController::class, 'active'])->name('admin.subcategory.active');
    Route::get('subcategory/unactive/{id}', [SubCategoryController::class, 'unActive'])->name('admin.subcategory.unactive');

    // ********** Product Routes **********
    Route::resource('product', ProductController::class, ['as' => 'admin']);
    Route::get('product/active/{id}', [ProductController::class, 'active'])->name('admin.product.active');
    Route::get('product/unactive/{id}', [ProductController::class, 'unActive'])->name('admin.product.unactive');

    // ********** Slider Routes **********
    Route::resource('slider', SliderController::class, ['as' => 'admin']);
    Route::get('slider/active/{id}', [SliderController::class, 'active'])->name('admin.slider.active');
    Route::get('slider/unactive/{id}', [SliderController::class, 'unActive'])->name('admin.slider.unactive');
});
