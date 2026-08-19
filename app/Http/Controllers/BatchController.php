<?php

namespace App\Http\Controllers;

use App\Http\Requests\BatchUpdateRequest;
use App\Models\Batch;
use App\Repositories\Batch\BatchRepositoryInterface;
use Illuminate\Http\Request;

class BatchController extends Controller
{

    protected $batchRepository;
    public function __construct(BatchRepositoryInterface $batchRepository)
    {
        $this->batchRepository = $batchRepository;
    }

    public function index()
    {
        $batches = $this->batchRepository->index();

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

        $this->batchRepository->store($data);

        return redirect()->route('batches.index');
    }

    public function edit($id)
    {
        $batch = $this->batchRepository->show($id);

        return view('batches.edit', compact('batch'));
    }

    public function update(BatchUpdateRequest $request)
    {
        $batch = $this->batchRepository->show($request->id);

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
        $batch = $this->batchRepository->show($id);

        $batch->delete();

        return redirect()->route('batches.index');
    }
}
