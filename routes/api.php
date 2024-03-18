<?php

use App\Http\Controllers\API\PortofilController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\API\UserexperienceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 


Route::resource('users', UserController::class);
Route::resource('userexperiences', UserexperienceController::class);













Route::get('/{email}',[PortofilController::class,'index']);