<?php

use Illuminate\Support\Facades\Cache;
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

Route::get('/route-cache', function() {
    Cache::flush();
    Route::clearResolvedInstances();
    return 'Routes cache cleared';
});


Route::get('/', [App\Http\Controllers\MainController::class,'index'])->name('home');
Route::get('/patient_experience', [App\Http\Controllers\MainController::class,'patient_experience'])->name('patient_experience');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
