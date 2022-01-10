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
Route::resource('/login', LoginController::class, ['as'=>'admin'])->middleware('guest:admin');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::resource('/dashboard', DashboardController::class, ['as'=>'admin']);

    Route::resource('orders', OrderController::class, ['as' => 'admin']);
    // ********* Main Category Routes ***********
    Route::resource('maincategories', MainCategoryController::class, ['as' => 'admin']);
    Route::get('maincategories/active/{id}', [MainCategoryController::class, 'active'])->name('admin.maincategories.active');
    Route::get('maincategories/unactive/{id}', [MainCategoryController::class, 'unActive'])->name('admin.maincategories.unactive');

    // ********** Sub Category Routes **********
    Route::resource('subcategories', SubCategoryController::class, ['as' => 'admin']);
    Route::get('subcategories/active/{id}', [SubCategoryController::class, 'active'])->name('admin.subcategories.active');
    Route::get('subcategories/unactive/{id}', [SubCategoryController::class, 'unActive'])->name('admin.subcategories.unactive');

    // ********** Product Routes **********
    Route::resource('products', ProductController::class, ['as' => 'admin']);
    Route::put('products/activate/{product}', [ProductController::class, 'activate'])->name('admin.products.activate');
    Route::put('products/featured/{product}', [ProductController::class, 'featured'])->name('admin.products.featured');

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
