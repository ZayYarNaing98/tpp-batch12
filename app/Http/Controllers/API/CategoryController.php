<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends BaseController
{
    public function index()
    {
        $categories = Category::get();

        $result = CategoryResource::collection($categories);

        return $this->success($result, "Category Retrieved Succssfully", 200);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'image' => 'required'
        ]);

        if($validator->fails())
        {
            return $this->error("Validation Error", $validator->errors(), 422);
        }

        $imageNmae = time() . '.' . $request->image->extension();
        if($request->hasFile('image'))
        {
            $request->image->move(public_path('categoryImage'), $imageNmae);
        }

        $category = Category::create([
            'name' => $request->name,
            'image' => $imageNmae
        ]);

        return $this->success($category, "Category Created Successfully", 201);

    }
}
