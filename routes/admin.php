<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainCategoryController;
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

Route::name('admin.')->group(function(){

    Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('getlogin');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });
    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
        Route::get('/', function () {
            return redirect()->route('dashboard');
        });
        Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

        // start category routes
        Route::group(['prefix' => 'main-category'], function () {
            Route::get('/', [MainCategoryController::class, 'index'])->name('maincategory');
            Route::get('/create', [MainCategoryController::class, 'create'])->name('maincategory.create');
            Route::post('/store', [MainCategoryController::class, 'store'])->name('maincategory.store');
            Route::get('/active/{id}', [MainCategoryController::class, 'active'])->name('maincategory.active');
            Route::get('/un-active/{id}', [MainCategoryController::class, 'unActive'])->name('maincategory.unactive');
            Route::get('/delete/{id}', [MainCategoryController::class, 'destroy'])->name('maincategory.delete');
        });
        Route::group(['prefix' => 'sub_category'], function () {
            Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
            Route::post('/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
        });
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
