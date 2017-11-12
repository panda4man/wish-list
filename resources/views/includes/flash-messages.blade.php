@foreach(['success', 'info', 'danger', 'warning'] as $type)
    @if(session('flash-' . $type))
        <div class="notification is-{{$type}}">
            {{session('flash-' . $type)}}
        </div>
    @endif
@endforeach