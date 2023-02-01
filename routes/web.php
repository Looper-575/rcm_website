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
Route::get('/medical_billing', [App\Http\Controllers\MainController::class,'medical_billing'])->name('medical_billing');
Route::get('/medical_credentialing', [App\Http\Controllers\MainController::class,'medical_credentialing'])->name('medical_credentialing');
Route::get('/workforce', [App\Http\Controllers\MainController::class,'workforce'])->name('workforce');
Route::get('/telehealth', [App\Http\Controllers\MainController::class,'telehealth'])->name('telehealth');
Route::get('/practice_manage', [App\Http\Controllers\MainController::class,'practice_manage'])->name('practice_manage');
Route::get('/absolute_revenue', [App\Http\Controllers\MainController::class,'absolute_revenue'])->name('absolute_revenue');
Route::get('/unyeild_commitment', [App\Http\Controllers\MainController::class,'unyeild_commitment'])->name('unyeild_commitment');
Route::get('/healthC_analytics', [App\Http\Controllers\MainController::class,'healthC_analytics'])->name('healthC_analytics');
Route::get('/tailored_solution', [App\Http\Controllers\MainController::class,'tailored_solution'])->name('tailored_solution');
Route::get('/all_solutions', [App\Http\Controllers\MainController::class,'all_solutions'])->name('all_solutions');
Route::get('/texo_about_us', [App\Http\Controllers\MainController::class,'texo_about_us'])->name('texo_about_us');
Route::get('/about_us', [App\Http\Controllers\MainController::class,'about_us'])->name('about_us');
Route::get('/contact_us', [App\Http\Controllers\MainController::class,'contact_us'])->name('contact_us');
Route::post('/contact_us_form', [App\Http\Controllers\MainController::class,'contact_us_form'])->name('contact_us_form');



Route::get('/laboratry', [App\Http\Controllers\MainController::class,'laboratry'])->name('laboratry');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/404', function () {
    $data['title']= 'Page Not Found - Atlantis RCM';
    $data['meta_description']= '';
    $data['meta_tags']= '';
    return view('frontend.errors.404',$data);
})->name('404');

Route::any('{query}',
    function() { return redirect('/404');
    })->where('query', '.*');

