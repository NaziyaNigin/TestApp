<?php

use App\Http\Controllers\FrondEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrondEndController::class,'homePage'])->name('home');

Route::get('user-registration',[FrondEndController::class,'register'])->name('registration');

Route::post('do-register',[FrondEndController::class,'doRegister'])->name('doRegister');

Route::get('login',[LoginController::class,'login'])->name('login');

Route::post('do-login',[LoginController::class,'doLogin'])->name('doLogin');


Route::group(['middleware'=>'user_auth'],function()
{

        Route::get('add-products',[ProductController::class,'addProducts'])->name('add.products');

        Route::post('save-products',[ProductController::class,'saveProducts'])->name('save.products');

        Route::get('edit-products/{productId}',[ProductController::class,'editProducts'])->name('edit.products');

        Route::post('update-products',[ProductController::class,'updateProducts'])->name('update.products');

        Route::get('delete-products/{productId}',[ProductController::class,'deleteProducts'])->name('delete.products');

        Route::get('view-products',[ProductController::class,'viewProducts'])->name('view.products');

        Route::get('logout',[LoginController::class,'logout'])->name('logout');
});


