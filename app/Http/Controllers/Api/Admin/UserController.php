<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManager\AdduserRequest;
use App\Http\Services\Admin\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        return (new UserService())->users();
    }

    public function store (AdduserRequest $request) {
        return (new UserService())->addUser($request);
    }

    public function edit (Request $request,$id) {
        return (new UserService())->edit($request,$id);
    }

    public function destroy ($id) {
        return (new UserService())->delete($id);
    }
}
