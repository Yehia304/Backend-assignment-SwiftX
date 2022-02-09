<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:api','admin']], function () {
    Route::resource('users',\App\Http\Controllers\Api\Admin\UserController::class);
    Route::resource('joggingtimes',\App\Http\Controllers\Api\Admin\JoggingTimesController::class);
});
