<?php
namespace App\Services;

class ApiResponseService
{
    public function response($data = [], $message = '', $status = 200)
    {
        return response()->json([
            'data' => $data,
            'message' => $message
        ], $status);
    }
}