<div id="eventoIndex" >
    <div class="component">
        <div class="botaoNoTitulo">
            <h4 class="component_titulo">Eventos</h4>
            @classDelegate
            <img src={{asset('/fixed/icons/plusWhite.png')}} class="addBtn">
            @endclassDelegate
        </div>
        @if(sizeof($events) > 0)
            <h4 class="component_subtitle">Escolha um evento em que a turma participou</h4>
        @else()
            <h4 class="component_subtitle">A sua turma ainda não participou em nenhum evento; Peça ao seu coordenador de turma ou professor para criar um</h4>
        @endif

        @classDelegate
        <div class="modal_events fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300 z-20">
            <!-- Modal content -->
            <div class="bg-white h-1/2 p-12">
                <!--Close modal button-->
                <button id="closebutton_events" type="button" class="focus:outline-none">
                    <!-- Hero icon - close button -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>

                    <form class="mini_form_event mini_form" method="POST" action="{{ url('/backOffice/event') }}">
                        @csrf
                        <div>
{{--                            <label for="name">Nome do evento</label>--}}
                            <label for="name">Novo evento</label>

                            <input type="text"
                                   id="name"
                                   class="custom_input_direct"
                                   name="name"
                                   autocomplete="name"
                                   placeholder="Nome do Curso"
                                   value=""
                                   required
                                   aria-describedby="nameHelp">
                        </div>

                        <div>
{{--                            <label for="description">Descrição:</label>--}}
                            <textarea
                                id="description"
                                name="description"
                                autocomplete="description"
                                placeholder="Descrição do Evento"
                                class="custom_input_direct textarea_input"
                                aria-describedby="nameHelp"></textarea>
                        </div>


                        <div>
{{--                            <label for="category">Categoria de evento:</label>--}}
                            <select class="custom_select_direct" name="category" >

                                <option value="1" selected >Visita de Estudo</option>
                                <option value="2" selected >Palestra</option>
                            </select>
                        </div>
{{--                        <button class="linkBtn linkBtnSmall" type="submit">Criar evento</button>--}}
                        <button class='w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-2 py-2 my-2'>Criar Evento</button>
                    </form>
            </div>
        </div>

        @endclassDelegate


    </div>

    @foreach($events as $event)

    <div class="individualEvent_index">
        <div class="individualEvent_info_index">
            <h4>@if($event->category==0)
                    Galeria
                @elseif($event->category==1)
                    Visita de Estudo
                @else
                    Palestra
                @endif
                 - {{$event->name}}</h4>
            <a href="{{ url('event/'.$event->id) }}" class='w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-2 py-2 my-1'>Ver Evento</a>
{{--            <a href="{{ url('event/'.$event->id) }}" class="linkBtn">Ver evento</a>--}}
        </div>

        <div class="carrossel">
            <div class="flex justify-center items-center">
                <div class="w-full bg-gray-100">
                    <div class="swiper-container w-100">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper" style="height: 20vw;  max-height: 30vh">
                             @foreach($photos as $photo)
                                @if($photo->event_id == $event->id)
                                    <div class="swiper-slide flex justify-center items-center" >
                                        <div>
                                            <img class="object-center w-full" src="{{asset($photo->url)}}">
                                        </div>
                                    </div>
{{--                                    <div class="swiper-slide flex justify-center items-center" >--}}
{{--                                        <div>--}}
{{--                                            <img class="object-center w-full" src="{{asset($photo->url)}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                @endif
                            @endforeach
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="carousel_buttons">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

    @endforeach

</div>
