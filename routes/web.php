<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;

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

//Authentication Routes
    Route::get('/login', [authController::class, 'login'])->name('login');
    Route::post('/login', [authController::class, 'loginAttempt']);


//Authenticated Routes
    Route::middleware('adminAuth')->group(function(){
        Route::get('/{any}', [adminController::class, 'index'])->where('any', '.*');
    });

