<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // dd('here');
        $categories = Category::all();

        // dd($categories);

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        // dd('here');
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        if($request->hasFile('image'))
        {
            $request->image->move(public_path('categoryImages'), $imageName);
        }


        Category::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('categories.index');

    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request)
    {
        $category = Category::find($request->id);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
