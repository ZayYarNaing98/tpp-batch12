<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::all();

        return view('batches.index', compact('batches'));
    }

    public function create()
    {
        return view('batches.create');
    }

    public function store(Request $request)
    {
        Batch::create($request->all());

        return redirect()->route('batches.index');
    }

    public function delete($id)
    {
        $batch = Batch::find($id);

        $batch->delete();

        return redirect()->route('batches.index');
    }
}
