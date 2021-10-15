<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

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
Route::group(['middleware' => ['web']], function() {
    

    Auth::routes();

// Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
// Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']); 

// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::group(['middleware' => ['auth', 'admin']], function(){

        Route::get('/store_images', [MainController::class, 'storeImagesPage'])->name('imagesPage');
        Route::post('/store_images/insert_image', [MainController::class, 'insert_image'])->name('add.photos');

    });
});

Route::group(['middleware' => ['auth','user']], function() {
    Route::get('/', [MainController::class, 'showHome'])->name('show.home');
    Route::get('/throughTheLens', [MainController::class, 'showTTL'])->name('show.ttl');
    Route::get('/store_image/fetch_image/{id}', [MainController::class, 'fetch_image']);
    });
});

