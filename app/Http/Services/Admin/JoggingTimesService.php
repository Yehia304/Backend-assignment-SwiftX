<?php

namespace App\Http\Services\Admin;

use App\Models\JoggingTime;
use Illuminate\Support\Facades\Auth;

class JoggingTimesService
{
    public function joggingTimes()
    {
        return apiResponse(JoggingTime::all(), 'Jogging times');
    }

    public function add($request)
    {
        JoggingTime::create($request->all());
        $data = JoggingTime::all();
        return apiResponse($data, 'Added');
    }

    public function edit($request, $id)
    {
        $joggingtime = JoggingTime::find($id);
        if ($joggingtime) {
            $joggingtime->update($request->all());
            $data = JoggingTime::all();
            return apiResponse($data, 'Updated');
        } else {
            $data = JoggingTime::all();
            return apiResponse($data, 'This record is not even found');
        }
    }

    public function delete($id)
    {
        $joggingtime = JoggingTime::find($id);
        if ($joggingtime) {
            $joggingtime->destroy($id);
            $data = JoggingTime::all();
            return apiResponse($data, 'Record deleted');
        } else {
            $data = JoggingTime::all();
            return apiResponse($data, 'This record is not even found');
        }
    }
}
