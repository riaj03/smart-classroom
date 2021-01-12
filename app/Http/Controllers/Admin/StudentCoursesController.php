<?php

namespace App\Http\Controllers\Admin;

use App\StudentCourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentCourses = StudentCourse::with(['student','course'])->get();
        return view('admin.studentcourse.index', compact('studentCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = \App\Course::get()->pluck('coures_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $students = \App\Student::with('user')->get()->pluck('user.name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        return view('admin.studentcourse.create', compact('courses', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request);
       $course = StudentCourse::create($request->all());
       return redirect()->route('admin.studentcourse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
