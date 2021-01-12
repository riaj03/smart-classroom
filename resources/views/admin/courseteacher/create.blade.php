@extends('layouts.app')

@section('content')
    <h3 class="page-title">Course Teacher</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.courseteacher.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('teacher_id', 'Teacher', ['class' => 'control-label']) !!}
                    {!! Form::select('teacher_id', $teachers, old('teacher_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('teacher_id'))
                        <p class="help-block">
                            {{ $errors->first('teacher_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('course_id', 'Course', ['class' => 'control-label']) !!}
                    {!! Form::select('course_id', $courses, old('course_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('course_id'))
                        <p class="help-block">
                            {{ $errors->first('course_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

