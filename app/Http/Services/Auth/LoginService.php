<?php

namespace App\Http\Services\Auth;

use App\Http\Resources\UserResource;

use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function userLogin ($requestData)
    {
        if (! Auth::attempt($requestData)) {
            return apiResponse(new \stdClass(), 'Wrong email or password', 401);
        }
        $user = \auth()->user();
        $token = $user->createToken('authToken');
        $data = [
            'token' => $token->accessToken,
            'expire_at' => $token->token->expires_at,
            'user' => new UserResource($user),
        ];
        return apiResponse($data, 'Logged in');
    }

    public function logout ()
    {
        $token = auth()->user()->token();
        $token->revoke();
        return apiResponse(new \stdClass(),'Logged out Successfully');
    }

}
