@extends('layouts.base')

@section('content')
    <wish-list-details :wish-list="{{json_encode($json['wishList'])}}" inline-template>
        <div>

        </div>
    </wish-list-details>
@endsection