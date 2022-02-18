<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories=Category::all();
        return response()->json([
            'status' => 'S',
            'message' => 'List of categories',
            'categories' => CategoryResource::collection($categories)

        ]);
    }
}
