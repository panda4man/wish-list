@extends('layouts.base')

@section('content')
    @if($wishLists->count() < 1)
        <div class="columns is-centered">
            <div class="column is-half-tablet is-third-desktop">
                <div class="notification is-primary">
                    You haven't created any lists yet.
                </div>
            </div>
        </div>
    @else
        <div class="columns is-multiline">
            @foreach($wishLists as $list)
                <div class="column is-half-tablet is-one-third-desktop">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                {{$list->name}}
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                @foreach($list->items as $item)
                                    <p>{{$item->name}}</p>
                                @endforeach
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a class="card-footer-item" href="{{route('wishListDetails', $list)}}">Edit</a>
                        </footer>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection