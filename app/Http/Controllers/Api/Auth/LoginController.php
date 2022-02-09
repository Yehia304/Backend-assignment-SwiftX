<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Services\Auth\LoginService;

class LoginController extends Controller
{
    public function Login (LoginRequest $request) {

        return (new LoginService())->userLogin($request->validated());
    }

    public function logout ()
    {
        return (new LoginService())->logout();
    }
}
