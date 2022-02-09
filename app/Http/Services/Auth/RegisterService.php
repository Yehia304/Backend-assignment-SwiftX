<?php

namespace App\Http\Services\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterService
{

    public function userRegister($request)
    {
        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);

        $user = User::create($request->except(['password_confirmation']));

        event(new registered($user));

        return apiResponse(new \stdClass(),
            'Registered Successfully',201);
    }

}
