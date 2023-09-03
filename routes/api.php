<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\FilesController;
/*
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
Route::controller(PostulacionController::class)->group(function () {
    Route::post('/postulacion', 'store');
    Route::get('/postulacion', 'index');
});

Route::controller(FilesController::class)->group(function () {
    Route::post('/archivocv', 'storeFile');
    Route::get('/archivocv/{name}', 'downloadFile');
});
