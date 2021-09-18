@extends('master.main')


@section('content')
        <div class="pagina_pessoal">
            @component('components.personal_intro', ['user' => $user])
            @endcomponent

            @if(sizeof($photos) > 0)
                @component('components.gallery', ['editable'=>0])
                @endcomponent
            @endif


{{--            @if(sizeof($comments) > 0)--}}
                @component('components.comments_user',
                    ['user' => $user,
                    'comments' => $comments,
                    'myComment'=>$myComment])
                @endcomponent
{{--            @endif--}}
        </div>

@endsection



@section('logic')
    @if(Auth::user()->id != $user->id)
        <script src="{{ asset('js/master/comments_users.js') }}"></script>
    @endif
    <script src="{{ asset('js/master/comments_users_delete.js') }}"></script>

    @if(sizeof($photos) > 0)
            <script src="{{ asset('js/master/gallery.js') }}"></script>
    @endif

@endsection
