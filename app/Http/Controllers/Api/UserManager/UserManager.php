<?php

namespace App\Http\Controllers\Api\UserManager;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManager\AdduserRequest;
use App\Http\Services\Auth\RegisterService;
use App\Http\Services\UserManager\UserManagerService;
use Illuminate\Http\Request;
class UserManager extends Controller
{
    public function index () {
        return (new UserManagerService())->getUsers();
    }

    public function store (AdduserRequest $request) {
        return (new UserManagerService())->add($request);
    }

    public function edit (Request $request,$id) {
        return (new UserManagerService())->edit($request,$id);
    }

    public function destroy ($id) {
        return (new UserManagerService())->delete($id);
    }
}
