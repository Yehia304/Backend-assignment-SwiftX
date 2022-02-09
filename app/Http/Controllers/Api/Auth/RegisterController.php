<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Services\Auth\RegisterService;

class RegisterController extends Controller
{

    public function register (RegisterRequest $request)
    {
        return (new RegisterService())->userRegister($request);
    }

}
