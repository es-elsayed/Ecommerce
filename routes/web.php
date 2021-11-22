<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\SiteController;
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


define('PAGINATION_COUNT', 8);

Auth::routes(['verify' => true]);

Route::post('/register', [RegisterController::class, 'create'])->name('register');
Route::name('site.')->group(function () {
    // ******************************************************
    // ******************** Guest Routes ********************
    // ******************************************************
    Route::middleware(['guest:web'])->group(function () {
        Route::get('/', function () {
            return redirect()->route('site.home');
        });
        Route::get('/home', [SiteController::class, 'home'])->name('home');
        Route::get('/shop', [SiteController::class, 'shop'])->name('shop');
        // ******************************************************
        // ******************** Categories Routes ********************
        // ******************************************************
        Route::get('categories/{slug}', [CategoryController::class,'show'])->name('category.show');
        // Route::get('subcategories/{slug}', [SubCategoryController::class,'show'])->name('subcategory.show');
        // ******************************************************
        // ******************** Products Routes ********************
        // ******************************************************
        Route::prefix('products')->group(function () {
            Route::get('/{product}', []);
        });
        Route::get('/add-to-cart/{id}', [SiteController::class, 'addToCart'])->name('add-to-cart');
    });
    // ******************************************************
    // ******************** Auth Routes ********************
    // ******************************************************
    Route::middleware(['auth:web'])->group(function () {

    });

});
