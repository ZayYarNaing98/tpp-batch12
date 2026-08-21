<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBatches = Batch::count();
        $totalInstructor = Instructor::count();
        $totalStudents = Student::count();
        $totalCategories = Category::count();

        return view('dashboard.index', compact('totalBatches', 'totalStudents', 'totalCategories', 'totalInstructor'));
    }
}
