<?php

namespace App\Http\Controllers;

use App\Models\Category;
use app\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
     * Create a new log category
     */
    public function Create(Request $request) : JsonResponse
    {
        try {
            $data = $request->all();
            $model = Category::Create($data);
    
            return JsonResponseTrait::Successfull('Category created', 201, $model);
        } catch (\Exception $e) {
            return JsonResponseTrait::Failure('Category cannot be created', 400);
        }
    }

    /**
     * List all log categories
     */
    public function List(Request $request) : JsonResponse
    {
        try {
            $model = Category::get();
    
            return JsonResponseTrait::Successfull('Category created', 201, $model);
        } catch (\Exception $e) {
            return JsonResponseTrait::Failure('Category cannot be created', 400);
        }
    }
}
