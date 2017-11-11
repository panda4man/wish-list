@extends('layouts.app')

@section('content')
    <div class="login is-flex">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Login
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <div class="columns">
                        <div class="column has-text-centered">
                            <a class="button is-info" href="{{url('/login/facebook')}}">
                                <span class="icon">
                                    <i class="fa fa-facebook-f"></i>
                                </span>
                                <span>Facebook</span>
                            </a>
                        </div>
                        <div class="column has-text-centered">
                            <a class="button is-info" href="{{url('/login/google')}}">
                                <span class="icon">
                                    <i class="fa fa-google"></i>
                                </span>
                                <span>Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="or-divider">
                        <div class="line"></div><div class="or">OR</div><div class="line"></div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="field">
                            <label for="email">E-Mail Address</label>
                            <div class="control">
                                <input id="email" type="email" class="input {{$errors->has('email') ? 'is-danger' : ''}}" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="password">Password</label>
                            <div class="control">
                                <input id="password" type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" name="password" required>
                            </div>
                            @if ($errors->has('password'))
                                <p class="help is-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">
                                    Login
                                </button>
                            </div>
                            <div class="control">
                                <a class="button is-text" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
@endsection
