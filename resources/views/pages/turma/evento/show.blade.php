@extends('master.main')


@section('content')

    @component('components.event_intro',
            ['event' => $event] )
    @endcomponent

    @component('components.comments_event',
            ['event' => $event,
            'comments' => $comments,
            'myComment'=>$myComment])
    @endcomponent

    @component('components.gallery', ['editable'=>1, 'event' =>$event])
    @endcomponent
@endsection


@section('logic')
        <script src="{{ asset('js/master/comments_events.js') }}"></script>
        <script src="{{ asset('js/master/gallery_add.js') }}"></script>
        @if(sizeof($photos)>0)
            <script src="{{ asset('js/master/gallery.js') }}"></script>
        @endif
@endsection
