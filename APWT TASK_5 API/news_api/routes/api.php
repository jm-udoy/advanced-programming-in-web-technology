<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\MailController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('news', [NewsController::class, 'index']);
Route::post('/add-news', [NewsController::class, 'store']);
Route::get('/edit-news/{id}', [NewsController::class, 'edit']);
Route::put('update-news/{id}', [NewsController::class, 'update']);
Route::delete('delete-news/{id}', [NewsController::class, 'destroy']);


