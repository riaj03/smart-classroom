@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
            <div class="panel-heading">
                Posts
            </div>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
            <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped {{ count($posts) > 0 ? 'datatable' : '' }}">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @if (count($posts) > 0)
                                    @foreach ($posts as $posts)
                                            <td field-key='name'>{{ $posts->id }}</td>
                                            <td field-key='name'>{{ $posts->course_id }}</td>
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
