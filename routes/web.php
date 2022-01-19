<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RastaController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OpenDataController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AnnounController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin/posts', function () {
    return view('admin.posts.index');
})->middleware(['auth'])->name('postIndex'); 



Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function (){

    Route::get('/dashboard', [AdminController::class, 'dashboard'] )->name('dashboard');

    Route::resource('rasta', RastaController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('about', AboutController::class);
    Route::resource('product', ProductController::class);
    Route::resource('opendata', OpenDataController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('announ', AnnounController::class);

});

require __DIR__.'/auth.php';
