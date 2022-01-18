<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
define('Wrong_Message',"Something Wrong Please Try later");

Route::resource('/login', LoginController::class, ['as'=>'admin'])->middleware('guest:admin');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::resource('/dashboard', DashboardController::class, ['as'=>'admin']);

    Route::resource('orders', OrderController::class, ['as' => 'admin']);

    // ********* Brand Routes ***********
    Route::resource('brands', BrandController::class, ['as' => 'admin']);
    Route::put('brands/{brand}/activate', [BrandController::class, 'activate'])->name('admin.brands.activate');

    // ********* Main Category Routes ***********
    Route::resource('maincategories', MainCategoryController::class, ['as' => 'admin']);
    Route::put('maincategories/{category}/activate', [MainCategoryController::class, 'activate'])->name('admin.maincategories.activate');

    // ********** Sub Category Routes **********
    Route::resource('subcategories', SubCategoryController::class, ['as' => 'admin']);
    Route::put('subcategories/{category}/activate', [SubCategoryController::class, 'activate'])->name('admin.subcategories.activate');
    // Route::get('subcategories/unactive/{id}', [SubCategoryController::class, 'unActive'])->name('admin.subcategories.unactive');

    // ********** Product Routes **********
    Route::resource('products', ProductController::class, ['as' => 'admin']);
    Route::put('products/{product}/activate', [ProductController::class, 'activate'])->name('admin.products.activate');
    Route::put('products/{product}/featured', [ProductController::class, 'featured'])->name('admin.products.featured');

    // ********** Slider Routes **********
    Route::resource('sliders', SliderController::class, ['as' => 'admin']);
    Route::get('sliders/active/{id}', [SliderController::class, 'active'])->name('admin.sliders.active');
    Route::get('sliders/unactive/{id}', [SliderController::class, 'unActive'])->name('admin.sliders.unactive');

    // ********** Site Routes **********
    Route::resource('site-info', SiteInfoController::class, ['as' => 'admin']);
    Route::resource('messages', MessageController::class, ['as' => 'admin']);

    Route::get('/', function () {
        return redirect()->route('admin.dashboard.index');
    });

    Route::post('/logout', function (Request $request) {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('admin.login.store');
    })->name('admin.logout');
});
