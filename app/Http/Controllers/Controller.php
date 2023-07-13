<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected function successResponse($data, $code = 200, $message = null)
    {
        return response()->json([
            'status' => 'success',
            'massage' => $message,
            'data' => $data
        ], $code);
    }
    protected function errorResponse($code, $message = null)
    {
        return response()->json([
            'status' => 'Error',
            'massage' => $message,
            'data' => null
        ], $code);
    }
}
