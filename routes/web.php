<?php

use App\Http\Controllers\FabricCategoryController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/show', [HomeController::class, 'show']);

Route::get('/category/{slug}', [FabricCategoryController::class, 'show']);

Route::get('/fabric/{slug}', [FabricController::class, 'show']);

Route::get('/about', function () {
    return view('pages.about');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
