<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

//Route::get('/', "FrontController@index")->name('main');


Route::get('/', [FrontController::class, 'index'])->name('main');
Route::get('/about-pic', [FrontController::class, 'showAboutUs']);
Route::view('/working-hours', 'main.working-hours');


Route::get('/services', function () {
   return view('main.service-page');
});
