@extends('layouts.base')

@section('content')
    <div class="columns">
        <div class="column">
            <h3>Welcome {{auth()->user()->name}}</h3>
        </div>
    </div>
@endsection
