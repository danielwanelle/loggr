<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

/**
 * This trait has defaults resposes from API
 */
class JsonResponseTrait
{
    /**
     * Assertion response
     * 
     * TODO: Create a method who convert the status code to the status name;
     */
    public static function Successfull(string $message, int $status = 200, array $data = []) : JsonResponse
    {
        return response()->json(
            [
                'message' => $message,
                'status' => $status,
                'data' => $data,
            ],
            $status
        );
    }
    
    /**
     * Error response
     */
    public static function Failure(string $message, int $status = 400) : JsonResponse
    {
        return response()->json(
            [
                'message' => $message,
                'status' => $status,
            ],
            $status
        );
    }
}