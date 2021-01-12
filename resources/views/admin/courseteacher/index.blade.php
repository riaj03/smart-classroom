@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Course Teacher</h3>
    <p>
        <a href="{{ route('admin.courseteacher.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($teachers) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>Teacher ID</th>
                        <th>Course Title</th>
                        <th>Course Code</th>
                        <th>Course Type</th>
                        <th>Batch</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($teachers) > 0)
                        @foreach ($teachers as $teachers)
                            <tr data-entry-id="{{ $teachers->id }}">
                                <td field-key='name'>{{ $teachers->teacher_id }}</td>
                                <td field-key='name'>{{ $teachers->course->coures_title }}</td>
                                <td field-key='email'>{{ $teachers->course->course_code}}</td>
                                <td field-key='role'>{{ $teachers->course->type}}</td>
                                <td field-key='role'>{{ $teachers->course->batch_id}}</td>
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
