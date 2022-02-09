<?php

namespace App\Http\Services\User;

use App\Models\JoggingTime;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function joggingtimes()
    {
        $data = Auth::user()->joggingtimes;
        return apiResponse($data, 'Jogging times');
    }

    public function create($request)
    {
        JoggingTime::create(array_merge($request, ['user_id' => Auth::id()]));
        $data = Auth::user()->joggingtimes;
        return apiResponse($data, 'Added');
    }

    public function update($request,$id)
    {
        $joggingtime = JoggingTime::find($id);
        if ($joggingtime) {
            if ($joggingtime->user_id == Auth::id()) {
                $joggingtime->update($request->all());
                $data = Auth::user()->joggingtimes;
                return apiResponse($data, 'Updated');
            } else {
                return apiResponse(new \stdClass(), 'Unauthorized, you are trying update a record that is not yours');
            }
        } else {
            $data = Auth::user()->joggingtimes;
            return apiResponse($data, 'This record is not even found');
        }

    }

    public function delete ($id)
    {
        $joggingtime = JoggingTime::find($id);
        if ($joggingtime) {
            if ($joggingtime->user_id == Auth::id()) {
                $joggingtime->destroy($id);
                $data = Auth::user()->joggingtimes;
                return apiResponse($data, 'Record deleted');
            } else {
                return apiResponse(new \stdClass(),'Unauthorized, you are trying update a record that is not yours');
            }
        } else {
            $data = Auth::user()->joggingtimes;
            return apiResponse($data, 'This record is not even found');
        }
    }
}
