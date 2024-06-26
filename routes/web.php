<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


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

Route::get('/', [Controller::class, 'index'])->name('home'); 
Route::post('/sendMail', [Controller::class, 'sendMail'])->name('sendMail');
// path for final page
Route::get('/final', function () {
    return view('final');
})->name('final');

