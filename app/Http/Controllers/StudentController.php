<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentUpdateRequest;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('batch')->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        $batches = Batch::all();

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

        Student::create($data);

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.edit', compact('student'));
    }

    public function update(StudentUpdateRequest $request)
    {
        $student = Student::find($request->id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('students.index');
    }

    public function delete($id)
    {
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('students.index');
    }
}
