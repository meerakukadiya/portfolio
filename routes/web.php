<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\indexController;
use App\Http\Controllers\front\contactUsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


 Route::get('/', [indexController::class,'index'])->name('index');
 Route::get('/download-resume', [indexController::class,'downloadResume']);
// Route::post('/', 'UserController@post');


Route::get('/contact-us', [contactUsController::class,'index']);
