<?php

use App\Http\Controllers\PetController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('pet', [PetController::class, 'newOrUpdate']);
Route::get('pet/{id?}', [PetController::class, 'get']);
Route::delete('pet/{id}', [PetController::class, 'delete']);
Route::get('photo/{photo_filename}', [PetController::class, 'getImage']);
