<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth:api','usermanager']], function () {
    Route::resource('users',\App\Http\Controllers\Api\UserManager\UserManager::class);
});
