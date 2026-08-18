<?php

namespace App\Http\Controllers;

use App\Http\Requests\BatchUpdateRequest;
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
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required'
        ]);

        Batch::create($data);

        return redirect()->route('batches.index');
    }

    public function edit($id)
    {
        $batch = Batch::find($id);

        return view('batches.edit', compact('batch'));
    }

    public function update(BatchUpdateRequest $request)
    {
        $batch = Batch::find($request->id);

        $batch->update([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status
        ]);

        return redirect()->route('batches.index');
    }

    public function delete($id)
    {
        $batch = Batch::find($id);

        $batch->delete();

        return redirect()->route('batches.index');
    }
}
