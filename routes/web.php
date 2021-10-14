<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Auth::routes();

Route::get('/', [MainController::class, 'showHome'])->name('show.home');
Route::get('/throughTheLens', [MainController::class, 'showTTL'])->name('show.ttl');


Route::get('/store_images', [MainController::class, 'storeImagesPage'])->name('imagesPage');
Route::post('/store_images/insert_image', [MainController::class, 'insert_image'])->name('add.photos');

Route::get('/store_image/fetch_image/{id}', [MainController::class, 'fetch_image']);

