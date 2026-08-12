<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'id' => 1,
                'name' => "PHP"
            ],
            [
                'id' => 2,
                'name' => "Laravel"
            ],
            [
                'id' => 3,
                'name' => "NextJS"
            ],
            [
                'id' => 4,
                'name' => "ReactJS"
            ],
            [
                'id' => 5,
                'name' => "VueJS"
            ],
        ];

        return view('categories.index', compact('categories'));
    }
}
