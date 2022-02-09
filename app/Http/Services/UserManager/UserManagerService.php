<?php

namespace App\Http\Services\UserManager;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserManagerService {
    public function getUsers () {
        return apiResponse(User::all(),'All users');
    }

    public function add ($request) {
        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);

        $user = User::create($request->all());

        event(new registered($user));

        return apiResponse(User::all(),
            'Registered Successfully',201);
    }

    public function edit ($request,$id) {
        $user = User::find($id);

        if ($user) {
            $user->update($request->all());

            return apiResponse(User::all(),
                'Updated Successfully', 201);
        } else {
            return apiResponse(new \stdClass(), 'User doesn\'t exist');
        }
    }

    public function delete($id) {
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
