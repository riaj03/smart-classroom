@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{$folder->name}}</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
            Files
        </div>
        @if (Auth::getUser()->role_id == 2)
            <a href="{{ route('admin.files.create',['fid'=> $folder->id, 'action'=>'std']) }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        @endif
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($files) > 0 ? 'datatable' : '' }}">
                <thead>
                <tr>
                    <th>Filename</th>
                    <th>Folder</th>
                </tr>
                </thead>

                <tbody>
                @if (count($files) > 0)
                    @foreach ($files as $file)
                        <tr data-entry-id="{{ $file->id }}">
                            <td field-key='filename'> @foreach($file->getMedia('filename') as $media)
                                    <p class="form-group">
                                        <a href="{{url('/admin/' . $file->uuid . '/download')}}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                    </p>
                                @endforeach</td>
                            <td field-key='folder'>{{ $file->folder->name or '' }}</td>
                            @if( request('show_deleted') == 1 )
                                <td>
                                    @can('file_delete')
                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.files.restore', $file->id])) !!}
                                        {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                    @can('file_delete')
                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.files.perma_del', $file->id])) !!}
                                        {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            @else
                                <td>
                                    <a href="{{url('/admin/' . $file->uuid . '/download')}}" class="btn btn-xs btn-success">Download</a>
                                    @can('file_delete')
                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.files.destroy', $file->id])) !!}
                                        {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
            <div class="panel-heading">
                Posts
            </div>
            @if (Auth::getUser()->role_id == 2)
            <a href="{{ route('admin.posts.create',['courseId'=> $folder->course_id, 'action'=>'std']) }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
            @endif
            <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped {{ count($posts) > 0 ? 'datatable' : '' }}">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @if (count($posts) > 0)
                                    @foreach ($posts as $posts)
                                            <td field-key='name'>{{ $posts->id }}</td>
                                            <td field-key='name'>{{ $posts->title }}</td>
                                            <td field-key='name'>{{ $posts->description }}</td>
                                            <td field-key='name'><a href="{{url($posts->link)}}" target="_blank">{{$posts->link}}</a></td>
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
    {{--</div>--}}
    {{--</div>--}}

    <p>&nbsp;</p>

    <a href="{{ route('admin.folders.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>


@stop
