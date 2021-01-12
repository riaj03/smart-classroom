@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Students</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($students) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>@lang('quickadmin.users.fields.name')</th>
                        <th>@lang('quickadmin.users.fields.email')</th>
                        <th>Current Batch ID</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($students) > 0)
                        @foreach ($students as $students)
                            <tr data-entry-id="{{ $students->id }}">
                                <td field-key='name'>{{ $students->user->name }}</td>
                                <td field-key='email'>{{ $students->user->email }}</td>
                                <td field-key='current_batch_id'>{{ $students->current_batch_id }}</td>
                                <td field-key='role'>{{ $students->role }}</td>
                                <td field-key='status'>
                                    @if($students->status == 1) 
                                        <span class="badge badge-success">Activated</span>
                                        @else <span class="badge badge-danger">Not Activated</span>
                                    @endif
                                </td>
                                <td>
                                    @can('user_view')
                                    <a href="{{ route('admin.users.show',[$students->user->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('admin.students.edit',[$students->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('user_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $students->user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

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

@section('javascript') 
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
        @endcan

    </script>
@endsection