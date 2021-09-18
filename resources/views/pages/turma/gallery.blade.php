@extends('master.main')

@section('content')

{{--    , ['photos' => $photos, 'editable'=>1, 'event' =>$event]--}}
        @component('components.gallery'
                , ['editable'=>2, 'event' =>$event]
                    )
        @endcomponent
@endsection



@section('logic')
    <script src="{{ asset('js/master/gallery_add.js') }}"></script>
    <script src="{{ asset('js/master/gallery.js') }}"></script>
    <script src="{{ asset('js/master/gallery_filter.js') }}"></script>

@endsection
