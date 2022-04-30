<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\API\AuthController;

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



Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Route::get('news', [NewsController::class, 'index']);


Route::get('/send-email', [MailController::class, 'sendEmail']);

    // Login manual
    Route::get('news', [NewsController::class, 'index']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('/add-news', [NewsController::class, 'store']);
    Route::get('/edit-news/{id}', [NewsController::class, 'edit']);
    Route::put('update-news/{id}', [NewsController::class, 'update']);
    Route::delete('delete-news/{id}', [NewsController::class, 'destroy']);
    // Register manual

Route::middleware(['auth:sanctum'])->group( function(){

    
 });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
