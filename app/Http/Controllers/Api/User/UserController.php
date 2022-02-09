<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\JoggingTimeRequest;
use App\Http\Services\User\UserService;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index () {
        return (new UserService())->joggingtimes();
    }

    public function store (JoggingTimeRequest $request) {
        return (new UserService())->create($request->validated());
    }

    public function edit (Request $request,$id) {
        return (new UserService())->update($request,$id);
    }

    public function destroy ($id) {
        return (new UserService())->delete($id);
    }
}
