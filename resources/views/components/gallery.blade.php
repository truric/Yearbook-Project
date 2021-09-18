<div id="galeriaTurma" class="component">
    <h4 class="component_titulo">Galeria</h4>

    <div class="galeriaBotoes">
        @if($editable == 2)
        <div class="gallery_toggle">
            <div class="toggle toggle_checked">
                <div class="switch switch_checked">
                    <input id="gallery_toggle_input" type="checkbox" class="toggle_value">
                    <label id="gallery_toggle_slider" for="gallery_toggle_input" class="slider" style="margin-bottom: 0px"></label>
                </div>
            </div>
            <h4 class="toggle_message" id="mainPageGallery">Ver Galeria Completa</h4>
        </div>
        @endif

    @if($editable == 1 || $editable == 2)
        <form class="gallery_form" method="POST" enctype="multipart/form-data" action="{{url('photo')}}">
            @csrf


            <label
                for="photo"
                class="inline-flex items-center
                    border border-blue-500 rounded-md px-4 py-2 m-2 transition duration-500 ease cursor-pointer select-none hover:text-white hover:bg-blue-600 focus:outline-none focus:shadow-outline
                    ">

                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                <span>Selecionar Foto</span>
            </label>

            <input type="file" name="photo[]" id="photo" multiple required>
            <button
                type="submit"
                class="disabled inline-flex items-center border
                    w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium px-2 py-2 my-1
                    ">
                Inserir Foto
            </button>

        </form>
    @endif
    </div>



    <div class="galeria">
{{--        @foreach($photos as $photo)--}}
{{--            <img class="galeria_item" ondblclick="window.location='{{ url( 'photo/'.$photo->id) }}'" src="{{asset($photo->url)}}" >--}}
{{--        @endforeach()--}}
    </div>

</div>
