<?php

namespace App\Http\Controllers\Admin;

use App\Batch;
use App\User;
use App\CourseTeacher;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = CourseTeacher::with('course')->get();
        return view('admin.courseteacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = \App\Course::get()->pluck('coures_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $teachers = \App\Teacher::with('user')->get()->pluck('user.name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        return view('admin.courseteacher.create', compact('courses', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseTeacher = CourseTeacher::create($request->all());
        return redirect()->route('admin.courseteacher.index');
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
