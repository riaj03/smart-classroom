@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">@lang('quickadmin.qa_dashboard')</div>

            <div class="panel-body">
                <div class="alert alert-success">
                        <strong>{{Auth::getUser()->name}}</strong> Welcome to GU Class room.
                </div>
                <div class="alert alert-info">
                        @if(Auth::getUser()->role_id == 1)
                        You are logged in as Admin<strong>Admin</strong>
                        @elseif(Auth::getUser()->role_id == 2)
                        You are logged in as <strong>Teacher</strong>
                        @elseif(Auth::getUser()->role_id == 3)
                        You are logged in as<strong>Student</strong>
                        @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
