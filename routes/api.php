<?php

use App\Http\Controllers\KatlaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Katla Route
Route::get('/katla', [KatlaController::class, 'getWord' ]);
Route::get('/katla/today', [KatlaController::class, 'getTodayWord' ]);
Route::get('/katla/date/{date}', [KatlaController::class, 'getWordbyDate' ]);
Route::get('/katla/insert/{word}', [KatlaController::class, 'insertWord' ]);
Route::get('/katla/generate-new-word', [KatlaController::class, 'generateNewWord' ]);
Route::get('/katla/delete-by-id/{id}', [KatlaController::class, 'deleteById' ]);



