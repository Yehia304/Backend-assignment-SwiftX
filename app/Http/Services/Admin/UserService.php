<?php

namespace App\Http\Services\Admin;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{
    public function users()
    {
        return apiResponse(User::all(), 'Users');
    }

    public function addUser($request)
    {
        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);

        $user = User::create($request->all());

        event(new registered($user));

        return apiResponse(new \stdClass(),
            'Registered Successfully', 201);
    }

    public function edit($request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update($request->all());

            return apiResponse(User::all(),
                'Updated Successfully', 201);
        } else {
            return apiResponse(new \stdClass(), 'User doesn\'t exist');
        }


    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->destroy($id);
            return apiResponse(User::all(),
                'deleted Successfully', 201);
        } else {
            return apiResponse(new \stdClass(), 'User doesn\'t exist');
        }

    }
}
