<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentUpdateRequest;
use App\Repositories\Batch\BatchRepositoryInterface;
use App\Repositories\Student\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    protected $studentRepository;
    protected $batchRepository;
    public function __construct(StudentRepositoryInterface $studentRepository, BatchRepositoryInterface $batchRepository)
    {
        $this->studentRepository = $studentRepository;
        $this->batchRepository = $batchRepository;
    }

    public function index()
    {
        $students = $this->studentRepository->index();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        $batches = $this->batchRepository->index();

        return view('students.create', compact('batches'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'batch_id' => 'required',
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string'
        ]);

        $this->studentRepository->store($data);

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = $this->studentRepository->show($id);

        return view('students.edit', compact('student'));
    }

    public function update(StudentUpdateRequest $request)
    {
        $student = $this->studentRepository->show($request->id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('students.index');
    }

    public function delete($id)
    {
        $student = $this->studentRepository->show($id);

        $student->delete();

        return redirect()->route('students.index');
    }
}
