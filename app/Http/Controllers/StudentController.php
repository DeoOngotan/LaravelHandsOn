<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3|max:5',
            'email' => 'required',
            'age' => 'required'
        ]);
        $newStudent = Student::create($data);
        return redirect(route('student.index'));
    }

    public function index(){
        $students = Student::all();
        return view('student.index', ['students'=>$students]);
    }
}
