@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">My Profile</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
            My current Courses
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($student) > 0 ? 'datatable' : '' }} "> 
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Course Title
                        </th>
                        <th>
                            Course Code
                        </th>
                        <th>
                        Type
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $student)
                    <tr>
                        <td>
                            {{ $student->course->id }}
                        </td>
                        <td>
                            <a href="{{ route('admin.folders.stdcourse',[$student->course->id,  'action'=>'std']) }}">{{$student->course->coures_title}}</a>
                        </td>
                        </td>
                        <td>
                            {{ $student->course->course_code }}
                        </td>
                        <td>
                        {{ $student->course->type }}
                        </td>
                        <td><a href="{{ route('admin.folders.stdcourse',[$student->course->id, 'action'=>'std'])}}" class="btn btn-xs btn-info">Show Folder</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
