<?php

if (!function_exists('apiResponse')) {

    function apiResponse ($data, $message = '', $statusCode = 200, $errors = [])
    {

        return response()->json([
            'message' => $message,
            'errors' => $errors,
            'data' => $data
        ], $statusCode);

    }

}
