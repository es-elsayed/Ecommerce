<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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



Auth::routes(['verify' => true]);

Route::post('/register', [RegisterController::class, 'create'])->name('register');
// Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
Route::name('site.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('site.home');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/shop', [SiteController::class, 'shop'])->name('shop');
});
