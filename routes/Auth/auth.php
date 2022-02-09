<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'user', 'middleware' => ['guest']], function () {
    Route::post('/login',
        [\App\Http\Controllers\Api\Auth\LoginController::class,
            'Login'
        ]);
    Route::post('/register',
        [
            \App\Http\Controllers\Api\Auth\RegisterController::class,
            'register'
        ]);
});

Route::group(['middleware' => ['auth:api']], function () {

    Route::get('user/logout', [\App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);

});
