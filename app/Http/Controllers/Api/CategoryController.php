<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request) {
        $category = category::create($request->all());

        if($category) {
            return response()->json([
                'data'=> new CategoryResource($category),
                'message'=>'The Post Save',
            ],200);
        }else {
            return response()->json([
                'message'=>'The Post Not Save',
            ],404);
        }
    }
}
