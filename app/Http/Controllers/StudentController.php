<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAllStudents() {
       $data = Student::all();

       return response()->json($data, 200);
    }

    public function showAllStudents() {
        $data = Student::all();

        return view('overview', ['students' => $data]);
    }
}
