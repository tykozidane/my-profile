<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KatlaController;

Route::get('/', function () {
    return view('profile');
});
// Route::get('/profile', function () {
//     return view('profile');
// });
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/katla', [KatlaController::class, 'getWord' ]);
