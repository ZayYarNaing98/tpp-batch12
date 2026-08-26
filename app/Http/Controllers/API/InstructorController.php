<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstructorController extends BaseController
{
    public function index()
    {
        $instructors = Instructor::get();

        return $this->success($instructors, "Instructors Retrieved Successfully", 200);
    }

    public function show($id)
    {
        $instructor = Instructor::find($id);

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

        $instructor = Instructor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);


        return $this->success($instructor, "Instructor Creaeted Successfully", 201);
    }
}
