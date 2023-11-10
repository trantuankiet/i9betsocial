<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ImageController;

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
//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

Route::get('/', [HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

//Video
Route::controller(VideoController::class)->group(function(){
    Route::get('/add-video', 'index')->name('add-video');
    Route::post('/add-video', 'store')->name('add-video');
});

//Image
Route::controller(ImageController::class)->group(function(){
    Route::get('/add-image', 'index')->name('add-image');
    Route::post('/add-image', 'store')->name('add-image');
});

Route::get('{any}', [HomeController::class, 'index'])->name('index');