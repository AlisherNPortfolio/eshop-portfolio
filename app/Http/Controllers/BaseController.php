<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    protected function successResponse($data, $code = 200)
    {
        return response()->json([
            'success' => true,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message = '', $code = 0, $details = null)
    {
        $response = [
            'success' => false,
            'code' => $code,
            'message' => $message
        ];

        if (!is_prod()) {
            $response['details'] = $details;
        }
        return response()->json($response);
    }
}
