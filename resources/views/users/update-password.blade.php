@extends('layouts.base')

@section('content')
    <div class="columns is-centered">
        <div class="column is-half-desktop is-three-quarters-tablet">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Update Password
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <form action="" method="POST">
                            {{csrf_field()}}
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
                                    <button class="button is-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
