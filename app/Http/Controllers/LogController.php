<?php

namespace App\Http\Controllers;

use App\Models\Log;
use app\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LogController extends Controller
{
    use JsonResponseTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Create a new log registry
     */
    public function Create(Request $request) : JsonResponse
    {
        try {
            $data = $request->all();
            $model = Log::Create($data);
    
            return JsonResponseTrait::Successfull('Log created', 201, $model);
        } catch (\Exception $e) {
            return JsonResponseTrait::Failure('Log cannot be created', 400);
        }
    }

    /**
     * List log registries by params
     */
    public function List(Request $request) : JsonResponse
    {
        try {
            $model = Log::get();
    
            return JsonResponseTrait::Successfull('Log successful listed', 200, $model);
        } catch (\Exception $e) {
            return JsonResponseTrait::Failure('Log cannot be listed', 400);
        }
    }
}
