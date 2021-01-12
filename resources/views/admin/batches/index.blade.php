@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Batches</h3>
    <p>
        <a href="{{ route('admin.batches.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($batches) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($batches) > 0)
                        @foreach ($batches as $batch)
                            <tr data-entry-id="{{ $batch->id }}">
                                <td field-key='name'>{{ $batch->id }}</td>
                                <td field-key='email'>{{ $batch->name }}</td>
                                <td field-key='role'>{{ $batch->status}}</td>
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
