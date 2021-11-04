<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
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
Route::group(['namespace'=>'Admin','middleware'=>'guest:admin'],function () {
    Route::get('/login', [LoginController::class, 'index'])->name('admin.getlogin');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
});
Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'],function () {
    // dd('after route');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/home', [DashboardController::class, 'index'])->name('admin.dashboard');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
// Route::get('/{any}',function(){
//     return redirect()->route('admin.login');
// });
