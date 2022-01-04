<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Site\Cart\AddressController;
use App\Http\Controllers\Site\Cart\OrderController;
use App\Http\Controllers\Site\Cart\ShippingController;
use App\Http\Controllers\Site\FavoriteProductController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PhoneController;
use App\Http\Controllers\Site\ProfileController;
use App\Http\Controllers\Site\SearchController;
use App\Http\Controllers\Site\ShopController;
use App\Http\Controllers\Site\SocialController;
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

        // ************************** Guest Routes **************************
        Route::post('/register', [RegisterController::class, 'create'])->name('register');
        Route::resource('login/phone', PhoneController::class,['as'=>'site.login']);
        Route::resource('/shop', ShopController::class, ['as' => 'site']);
        Route::get('/shop/product/{slug}', [ShopController::class, 'product'])->name('shop.product.show');
        Route::resource('/search', SearchController::class, ['as' => 'site']);
        Route::resource('/home', HomeController::class, ['as' => 'site']);
        Route::get('redirect/{service}',[SocialController::class,'redirect'])->name('social.login');
        Route::get('{service}/callback',[SocialController::class,'callback'])->name('social.callback');

        Route::prefix('cart')->name('site.cart.')->group(function () {
            // ******************** Cart Routes **************************
            Route::get('/', [CartController::class, 'index'])->name('list');
            Route::post('/', [CartController::class, 'store'])->name('store');
            Route::post('update-cart', [CartController::class, 'update'])->name('update');
            Route::post('remove', [CartController::class, 'destroy'])->name('remove');
            Route::post('clear', [CartController::class, 'clearAll'])->name('clear');
        });

        // ************************** Auth Routes **************************
        Route::group(['middleware' => 'auth:web'], function () {
            Route::resource('/address', AddressController::class, ['as' => 'site']);
            Route::resource('/favorite', FavoriteProductController::class, ['as' => 'site']);
            Route::resource('/review', ReviewController::class, ['as' => 'site']);
            Route::resource('/shipping', ShippingController::class, ['as' => 'site']);
            Route::resource('/profile', ProfileController::class, ['as' => 'site']);
            Route::resource('/order', OrderController::class, ['as' => 'site']);
            Route::get('/order/all/{id}', [OrderController::class, 'all'])->name('site.order.all');
            Route::delete('/order/cancel/{id}', [OrderController::class, 'cancel'])->name('site.order.cancel');
            // Route::post('/review/{id}', [ReviewController::class, 'store'])->name('site.review.post');
        });

        Route::get('/', function () {
            return redirect()->route('site.home.index');
        });
        Route::get('/logout', function () {
            Auth::logout();
            return redirect()->route('site.home.index');
        })->name('site.logout');
    }
);
