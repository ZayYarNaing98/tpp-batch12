<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstructorUpdateRequest;
use App\Repositories\Instructor\InstructorRepositoryInterface;
use Illuminate\Http\Request;

class InstructorController extends Controller
{

    protected $instructorRepository;
    public function __construct(InstructorRepositoryInterface $instructorRepository)
    {
        $this->instructorRepository = $instructorRepository;
    }

    public function index()
    {
        $instructors = $this->instructorRepository->index();

        return view('instructors.index', compact('instructors'));
    }

    public function create()
    {
        return view('instructors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:instructors,email',
            'phone' => 'nullable|string'
        ]);

        $this->instructorRepository->store($data);

        return redirect()->route('instructors.index');
    }

    public function edit($id)
    {
        $instructor = $this->instructorRepository->show($id);

        return view('instructors.edit', compact('instructor'));
    }

    public function update(InstructorUpdateRequest $request)
    {
        $instructor = $this->instructorRepository->show($request->id);

        $instructor->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('instructors.index');
    }

    public function delete($id)
    {
        $instructor = $this->instructorRepository->show($id);

        $instructor->delete();

        return redirect()->route('instructors.index');
    }
}
