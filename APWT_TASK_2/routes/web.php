<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('login');
});



Route::get('/home', [PagesController::class,'home'])->name('home');
Route::get('/product', [PagesController::class,'product'])->name('product');
Route::get('/ourteams', [PagesController::class,'ourteams'])->name('ourteams');
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/contact', [PagesController::class,'contact'])->name('contact');

Route::get('/login', [PagesController::class,'login'])->name('login');
Route::post('/login', [PagesController::class,'logininput'])->name('logininput');
Route::get('/registration', [PagesController::class,'registration'])->name('registration');
Route::post('/registration', [PagesController::class,'registrationsubmit'])->name('registrationsubmit');
