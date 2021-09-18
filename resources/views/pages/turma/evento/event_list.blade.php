@extends('master.main')

@section('content')
    @component('components.event_group_list',
                ['events' => $events,
                'photos' => $photos])
    @endcomponent
@endsection



@section('logic')
    @classDelegate
        <script src="{{ asset('js/master/event_form.js') }}"></script>
    @endclassDelegate
    <script src="{{ asset('js/master/event_index.js') }}"></script>


@endsection
