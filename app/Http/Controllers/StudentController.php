<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vStudents = Student::all();
        return view('Student.index', [
            'students' => $vStudents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->secondName = $request->input('secondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //SIngle student
        $vStudent = Student::find($id);

        //All students
        $vStudents = Student::all();

        return view('Student.show', [
            'student'  => $vStudent,
            'students'  => $vStudents,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find Student with $id
        $vStudent = Student::find($id);

        //All students
        $vStudents = Student::all();

        return view('Student.edit', [
            'student'  => $vStudent,
            'students'  => $vStudents,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find Student with $id
        $student = Student::find($id);

        //Fetch from edit view
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->secondName = $request->input('secondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->update();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find Student with $id
        $student = Student::find($id);

        $student->delete();

        return redirect('/');
    }
}
