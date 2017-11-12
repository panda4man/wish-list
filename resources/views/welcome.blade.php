@extends('layouts.base')

@section('content')
    <div class="welcome">
        <div class="columns is-centered">
            <div class="column is-half-desktop">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Welcome to {{config('app.name')}}
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            You can do all the things on this website.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection