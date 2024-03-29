<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        $student = Student::create($request->all());

        return response()->json($student);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        $student->update($request->all());

        return response()->json($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json(['message' => 'Student deleted successfully']);
    }
}
