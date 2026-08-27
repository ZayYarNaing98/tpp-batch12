<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorUpdateRequest;
use App\Repositories\Instructor\InstructorRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstructorController extends BaseController
{
    protected $instructorRepository;
    public function __construct(InstructorRepositoryInterface $instructorRepository)
    {
        $this->instructorRepository = $instructorRepository;
    }

    public function index()
    {
        $instructors = $this->instructorRepository->index();

        return $this->success($instructors, "Instructors Retrieved Successfully", 200);
    }

    public function show($id)
    {
        $instructor = $this->instructorRepository->show($id);

        return $this->success($instructor, "Instructor Show Successfully", 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string'
        ]);

        if($validator->fails())
        {
            return $this->error("Validation Error", $validator->errors(), 422);
        }

        $instructor = $this->instructorRepository->store([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);


        return $this->success($instructor, "Instructor Creaeted Successfully", 201);
    }

    public function update(InstructorUpdateRequest $request, $id)
    {
        $instructor = $this->instructorRepository->show($id);

        $instructor->update($request->validated());

        return $this->success($instructor, "Instructor Updated Successfully", 200);
    }

    public function delete($id)
    {
        $instructor = $this->instructorRepository->show($id);

        $instructor->delete();

        return $this->success(true, "Instructor Deleted Successfully", 200);
    }
}
