<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Grade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::paginate(15);
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("student.create");
        $grades=Grade::pluck('grade_name' ,'id');
        return view("student.create", compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student=new Student;
        $student->first_name=$request->input("first_name");
        $student->last_name=$request->input("last_name");
        $student->grade_id=$request->input("grade_id");
        $student->save();
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        $grades=Grade::pluck('grade_name' ,'id');
        return view("student.edit", compact('grades','student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student=Student::find($id);
        $student->first_name=$request->input("first_name");
        $student->last_name=$request->input("last_name");
        $student->grade_id=$request->input("grade_id");
        $student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('students');
    }
}
