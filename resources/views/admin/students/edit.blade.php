@extends('layouts.app')

@section('content')
    <h3 class="page-title">Student</h3>
    
    {!! Form::model($students, ['method' => 'PUT', 'route' => ['admin.students.update', $students->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('role', 'Role', ['class' => 'control-label']) !!}
                    {!! Form::text('role', old('role'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('role'))
                        <p class="help-block">
                            {{ $errors->first('role') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('status','Status', ['class' => 'control-label']) !!}
                        {!! Form::select('status', ['Not Activated', 'Activated'], old('status'), ['class' => 'form-control select2', 'required' => '', 'id' => 'roleSelect']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('status'))
                            <p class="help-block">
                                {{ $errors->first('status') }}
                            </p>
                        @endif
                    </div>
                </div>
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

