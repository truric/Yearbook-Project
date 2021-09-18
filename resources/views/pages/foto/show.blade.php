@extends('master.main')

@section('content')

    @component('components.photo_individual' , ['photo' => $photo])
    @endcomponent

    @component('components.tags',
            ['title'=> 'Na Fotografia',
            'tags' => $tags,
            'val' => $photo,
            'myTag' => $myTag,
            'extra_info' => 0])
    @endcomponent


@endsection



@section('logic')
    <script src="{{ asset('js/master/individual_photo.js') }}"></script>
@endsection
