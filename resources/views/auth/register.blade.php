@extends('layouts.app')

@section('parentClass', 'is-flex')

@section('body')
    <div class="register is-flex">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Register
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="field">
                            <label for="name">Name</label>
                            <div class="control">
                                <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            @if ($errors->has('name'))
                                <p class="help is-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </p>
                            @endif
                        </div>

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
                            <label for="password-confirm">Confirm Password</label>
                            <div class="control">
                                <input id="password-confirm" type="password" class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" name="password_confirmation" required>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
