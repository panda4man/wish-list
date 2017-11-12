@extends('layouts.app')

@section('body')
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half-desktop is-two-thirds-tablet">
                    @include('includes.flash-messages')
                </div>
            </div>

            @yield('content')
        </div>
    </section>
@endsection