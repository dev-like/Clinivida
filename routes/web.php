<?php

use AdminController;
use BannerController;
use HomeController;
use QuemSomosController;
use UserController;
use ParceirosController;

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

Route::get('/', [HomeController::class, 'index'])->name('site');


Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::get('', [AdminController::class, 'index']);
    Route::resource('banners', BannerController::class)->except(['show', 'create']);
    Route::resource('quemSomos', QuemSomosController::class)->only(['index', 'update']);

    Route::resource('parceiros', ParceirosController::class)->except(['show', 'create']);
    Route::resource('users', UserController::class)->except(['show', 'create']);
    Route::put('users/password/{user}', [UserController::class, 'updatePassword'])->name('users.updatePassword');
});

require __DIR__.'/auth.php';
