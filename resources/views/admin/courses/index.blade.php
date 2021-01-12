@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Courses</h3>
    <p>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($coureses) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>Coures Title</th>
                        <th>Course Code</th>
                        <th>Type</th>
                        <th>Btach</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($coureses) > 0)
                        @foreach ($coureses as $coure)
                            <tr data-entry-id="{{ $coure->id }}">
                                <td field-key='name'>{{ $coure->coures_title }}</td>
                                <td field-key='email'>{{ $coure->course_code }}</td>
                                <td field-key='role'>{{ $coure->type}}</td>
                                <td field-key='role'>{{ $coure->batch->name, ''}}</td>
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
