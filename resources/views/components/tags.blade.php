<div class="component">
    <div class="botaoNoTitulo">
        <h3 class="component_titulo">{{$title}}</h3>
        @if($val != "")
            @if(sizeOf($myTag) <= 0)
                <form method="POST" action="{{url('photo/'.$val->id.'/usersAdd')}}">
                @csrf
                    <button
                        type="submit"
                        class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline">
                        Estou nesta Foto
                    </button>
                </form>
            @else
                <form method="POST" action="{{url('photo/'.$val->id.'/usersRemove')}}">
                    @csrf
                    <button
                        type="submit"
                        class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                        Não estou nesta Foto
                    </button>
                </form>
            @endif
        @endif


    </div>


    <div class="tagList">
        @if(sizeof($tags) > 0)
            @foreach($tags as $tag)

                <div class="p-3">
                    <div class="text-center mb24 opacity-90">
                        <a href='{{ url('user/'.$tag->id) }}' class="block relative">
                            <img src="{{$tag->url}}" class="mx-auto object-cover rounded-full h-40 w-40">
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl text-gray-800 dark:text-white">
                            {{$tag->simpleName}}
                        </p>
                        @if($extra_info == 1)
                        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                            @if($tag->student->category == 1)
                                Delegado
                            @elseif($tag->student->category == 2)
                                Sub-Delegado
                            @endif
                        </p>
                            @endif
                    </div>

                </div>

            @endforeach
        @endif
    </div>
</div>
