<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Site\Cart\AddressController;
use App\Http\Controllers\Site\Cart\OrderController;
use App\Http\Controllers\Site\Cart\ShippingController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProfileController;
use App\Http\Controllers\Site\SearchController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


define('PAGINATION_COUNT', 8);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Auth::routes(['verify' => true]);

        Route::post('/register', [RegisterController::class, 'create'])->name('register');
        Route::name('site.')->group(function () {
            // ******************************************************************
            // ************************** Guest Routes **************************
            // ******************************************************************
            Route::get('/', function () {
                return redirect()->route('site.home');
            });
            Route::get('/home', [HomeController::class, 'index'])->name('home');
            Route::get('/shop', [CategoryController::class, 'index'])->name('shop');
            // ***********************************************************
            // ******************** Categories Routes ********************
            // ***********************************************************
            Route::get('categories/{slug}', [ProductController::class, 'show'])->name('category.show');
            // Route::get('subcategories/{slug}', [SubCategoryController::class,'show'])->name('subcategory.show');

            // ***********************************************************
            // ******************** Cart Routes **************************
            // ***********************************************************
            Route::prefix('cart')->name('cart.')->group(function () {
                Route::get('/', [CartController::class, 'index'])->name('list');
                Route::post('/', [CartController::class, 'store'])->name('store');
                Route::post('update-cart', [CartController::class, 'update'])->name('update');
                Route::post('remove', [CartController::class, 'destroy'])->name('remove');
                Route::post('clear', [CartController::class, 'clearAll'])->name('clear');
            });
            // ***********************************************************
            // ******************** Search Routes ************************
            // ***********************************************************
            Route::prefix('search')->name('search')->group(function () {
                Route::get('/', [SearchController::class, 'index']);
            });


            // *****************************************************************
            // ************************** Auth Routes **************************
            // *****************************************************************
            Route::middleware(['auth:web'])->group(function () {
                Route::prefix('checkout')->name('checkout.')->group(function () {
                    Route::resource('/address',AddressController::class,['names'=>['index'=>'address.index','store'=>'address.store']]);
                    Route::resource('/shipping',ShippingController::class,['names'=>['index'=>'shipping.index','store'=>'shipping.store']]);
                    Route::resource('/order',OrderController::class,['names'=>['index'=>'order.index','store'=>'order.store']]);
                });
                // Route::prefix('profile')->name('profile.')->group(function () {
                //     Route::get('/', [ProfileController::class, 'index'])->name('index');
                //     // Route::get('/', [CheckoutController::class, 'index'])->name('index');
                // });
            });
        });
    }
);
Route::group(['middleware'=>'auth:web'],function () {
    Route::resource('/profile', ProfileController::class,['as'=>'site']);
});
