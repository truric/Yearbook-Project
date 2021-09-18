@extends('backOffice.main')

@section('content')
    <section id="crudAluno">
        @if(session('perigo'))
            <div class="perigo session">
                {{ session('perigo') }}
                <img src="{{asset('fixed/icons/xBlack.png')}}" class="closeSession">
            </div>
        @endif

        @if(session('aviso'))
            <div class="aviso session">
                {{ session('aviso') }}
                <img src="{{asset('fixed/icons/xBlack.png')}}" class="closeSession">
            </div>
        @endif

        @if(session('sucesso'))
            <div class="sucesso session">
                {{ session('sucesso') }}
                <img src="{{asset('fixed/icons/xBlack.png')}}" class="closeSession">
            </div>
        @endif

            <a>Novo Evento</a>

            <form class="form_crud_evento" method="POST" action="{{ url('/backOffice/event') }}">
                @csrf
                <div class="form_evento_nome">
                    <label for="name">Nome do evento</label>
                    <input type="text"
                           id="name"
                           class="custom_input_direct"
                           name="name"
                           autocomplete="name"
                           placeholder="Nome do Evento"
                           value=""
                           required
                           aria-describedby="nameHelp">
                </div>

                <div class="form_evento_descricao">
                    <label for="description">Descrição:</label>
                    <textarea
                        id="description"
                        name="description"
                        autocomplete="description"
                        placeholder="Descrição do Evento"
                        class="custom_input_direct textarea_input"
                        aria-describedby="nameHelp"></textarea>
                </div>

                <div class="form_evento_categoria">
                    <label for="category">Categoria de Evento:</label>
                    <!-- <input type="text" class="inputSearch custom_input" placeholder="Search.."> -->
                    <select class="custom_select_direct" name="category">
                        <option value="1">Visita de Estudo</option>
                        <option value="2">Palestra</option>

                    </select>

                </div>

                <label for="curso">Turmas do Evento:</label>


                <div class="form_evento_turmas">
                    <div class="coluna_procurar_turmas">
                        <input type="text" class="inputSearch custom_input" id="searchEvento" placeholder="Procurar turmas">
                        <select class="custom_select coluna_procurar_turmas_select" name="turma_id" multiple size="30">
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="setas">
                        <a class="right_arrow_eventos">
                            <img src={{asset('fixed/icons/big-right-arrow.png')}}>

                        </a>
                        <a class="left_arrow_eventos">
                            <img src={{asset('fixed/icons/big-left-arrow.png')}}>
                        </a>
                    </div>

                    <div class="coluna_selecionar_eventos">
                        <input type="text" class="inputSearch custom_input" placeholder="Procurar turmas">
                        <select class="custom_select coluna_selecionar_turmas_select" name="groupArray[]" multiple size="30">

                        </select>
                    </div>

                </div>


                <button class="btn" type="submit">Criar Evento</button>

            </form>


    </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudEvento.js')}}></script>

@endsection
