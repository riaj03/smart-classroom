@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Student Course</h3>
    <p>
        <a href="{{ route('admin.studentcourse.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($studentCourses) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Course Title</th>
                        <th>Course Code</th>
                        <th>Course Type</th>
                        <th>Batch</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($studentCourses) > 0)
                        @foreach ($studentCourses as $studentCourses)
                            <tr data-entry-id="{{ $studentCourses->id }}">
                                <td field-key='name'>{{ $studentCourses->student_id }}</td>
                                <td field-key='name'>{{ $studentCourses->course->coures_title }}</td>
                                <td field-key='email'>{{ $studentCourses->course->course_code}}</td>
                                <td field-key='role'>{{ $studentCourses->course->type}}</td>
                                <td field-key='role'>{{ $studentCourses->course->batch_id}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
