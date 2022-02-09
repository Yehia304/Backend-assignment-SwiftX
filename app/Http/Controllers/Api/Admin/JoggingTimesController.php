<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JoggingTimeRequest;
use App\Http\Services\Admin\JoggingTimesService;
use Illuminate\Http\Request;

class JoggingTimesController extends Controller
{
    public function index () {
        return (new JoggingTimesService())->joggingTimes();
    }

    public function store (JoggingTimeRequest $request) {
        return (new JoggingTimesService())->add($request);
    }

    public function edit (Request $request, $id) {
        return (new JoggingTimesService())->edit($request, $id);
    }

    public function destroy ($id) {
        return (new JoggingTimesService())->delete($id);
    }
}
