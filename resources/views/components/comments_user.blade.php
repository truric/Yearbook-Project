<div id="comentariosTurma" class="component">
    <div class="botaoNoTitulo">
        <h4 class="component_titulo">Comentários</h4>

        @if(Auth::User()->id != $user->id)
        <img src={{asset('/fixed/icons/plusWhite.png')}} class="addBtn @if($myComment != null) exists @endif">
        @endif
    </div>



    <div class="modal-comments fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300 z-20">
        <!-- Modal content -->
        <div class="bg-white h-1/2 p-12">
            <!--Close modal button-->
            <button id="closebutton_comments" type="button" class="focus:outline-none">
                <!-- Hero icon - close button -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>


    @if(Auth::User()->id != $user->id)
        @if($myComment != null)
            <form class="mini_form" method="POST" action="{{ url('/commentUserUser/'.$myComment->id) }}">
            @csrf
            @method('PUT')
        @else
            <form class="mini_form" method="POST" action="{{ url('/commentUserUser')}}">
            @csrf
        @endif

                <textarea
                       class="custom_input_direct py-2"
                       id="message"
                       name="message"
                       autocomplete="name"
                       placeholder="Insira o seu comentário"
                       aria-describedby="nameHelp">@if( $myComment!=null){{$myComment->message}}@endif</textarea>

                <button class='w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-2 py-2 my-2'>Submeter</button>
            </form>
        </form>
    @endif
        </div>
    </div>

    <div class="">
        @foreach($comments as $comment)
            <div class="bg-white dark:bg-gray-800 w-72 shadow-lg mx-auto rounded-xl p-4 mb-4">
                <p class="text-gray-600 dark:text-white">
                    <span class="font-bold text-indigo-500 text-lg"> “ </span>
                    {{$comment->message}}
                    <span class="font-bold text-indigo-500 text-lg"> ” </span>
                </p>

                <div class="flex items-center w-100 mt-4 justify-content-cent align-items-center justify-content-between">
                    <a href="{{ url('user/'.$comment->emitter->id) }}" class="block relative flex align-items-center">
                        <img src="{{$comment->emitter->url}}" class="mx-auto object-cover rounded-full h-10 w-10"/>
                        <span class="font-semibold text-indigo-500 text-sm pl-2">
                        {{$comment->emitter->simpleName}}
                    </span>
                    </a>
                    @if($comment->emitter->id == Auth::User()->id || Auth::User()->role <= 5)
                        <form method="POST" action="{{ url('/commentUserUser/'.$comment->id) }}" class="flex justify-content-center">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="anonymous justify-self-end "><img src="{{asset('/fixed/icons/xWhite.png')}}" class="removeBtn h-6 w-6"></button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
