<div id="photo_individual" class="component">
{{--    <div class="setaNoTitulo">--}}
{{--        <h4 class="event_title">evento</h4>--}}
{{--        <img src={{asset('fixed/icons/arrowLeft.png')}} class="backArrow"></>--}}
{{--    </div>--}}

    <img class="photo_individual_info_imagem" src={{asset( $photo->url )}}>

    <div class="botaoNoTitulo">
        <h3 class="component_titulo">{{$photo->event->name}}</h3>

        @classDelegate
        <form method="POST" action="" action="{{url('photo/'.$photo->id)}}">
            @csrf
            @method("DELETE")
            <button
                type="submit"
                class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                Eliminar Foto
            </button>
        </form>
        @endclassDelegate

    </div>

    <div class="photo_individual_info_text">
        <h4 class="sobremim_info"><strong>Foto Inserida por: </strong> {{$photo->user->simpleName}} </h4>
        <h4 class="sobremim_info"><strong>Data de inserção da foto: </strong> {{$photo->updated_at}} </h4>
    </div>

</div>
