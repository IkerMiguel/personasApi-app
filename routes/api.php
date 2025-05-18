<?php

use App\Http\Controllers\api\ComunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas');
Route::get('/comunas/{comuna}', [ComunaController::class, 'show'])->name('comunas.show');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
