@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('quickadmin.qa_register')</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">@lang('quickadmin.qa_name')</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="batch_id" class="col-md-4 control-label">Current Batch</label>
                                <div class="col-md-6">
                                    {!! Form::select('batch_id', $batch, old('batch_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">@lang('quickadmin.qa_confirm_password')</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="batch_id" class="col-md-4 control-label">ID Card</label>
                                <div class="col-md-6">
                                    {!! Form::file('filename[]', [
                                        'multiple',
                                        'class' => 'form-control file-upload',
                                        'data-url' => route('admin.media.upload'),
                                        'data-bucket' => 'filename',
                                        'data-filekey' => 'filename',
                                        'id' => 'my_id'
                                        ]) !!}
                                    <p class="help-block"></p>
                                    <div class="photo-block">
                                        <div class="progress-bar form-group">&nbsp;</div>
                                        <div class="files-list"></div>
                                    </div>
                                    @if($errors->has('filename'))
                                        <p class="help-block">
                                            {{ $errors->first('filename') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" id="role_id" name="role_id" value="3">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('quickadmin.qa_register')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
