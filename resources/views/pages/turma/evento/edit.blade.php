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

        <a>Editar Evento</a>

        <form method="POST" action="{{ url('/backOffice/event/'.$event->id) }}">
            @csrf
            @method('PUT')
            <div class="form_evento_nome">
                <label for="name">Nome do evento</label>
                <input type="text"
                       id="name"
                       class="custom_input_direct"
                       name="name"
                       autocomplete="name"
                       placeholder="Nome do Curso"
                       value="{{$event->name}}"
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
                    aria-describedby="nameHelp">{{$event->description}}</textarea>
            </div>

            <div class="form_evento_categoria">
                <label for="category">Categoria de Evento:</label>
                <select class="custom_select_direct" name="category" @if($event->category == 0) disabled @endif>
                    <option value="0" disabled @if($event->category == 0) selected @endif>Evento de Turma</option>
                    <option value="1" @if($event->category == 1) selected @endif>Visita de Estudo</option>
                    <option value="2" @if($event->category == 2) selected @endif>Palestra</option>
                </select>
            </div>

            @if($event->category != 0)
                <label for="curso">Turmas do Evento:</label>
            @else
                <label for="curso">Este é o evento único da turma. Não podem pertencer outras turmas</label>
            @endif


            <div class="form_evento_turmas @if($event->category == 0) hidden @endif" >
                <div class="coluna_procurar_turmas">
                    <input type="text" class="inputSearch custom_input" id="searchEvento" placeholder="Procurar turmas"@if($event->category == 0) disabled @endif>
                    <select class="custom_select coluna_procurar_turmas_select" name="turma_id" multiple size="30"@if($event->category == 0) disabled @endif>
                        @foreach($groupsLook as $groupLook)
                            <option value="{{$groupLook->id}}">{{$groupLook->name}}</option>
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
                    <input type="text" class="inputSearch custom_input" placeholder="Procurar turmas"@if($event->category == 0) disabled @endif>
                    <select class="custom_select coluna_selecionar_turmas_select" name="groupArray[]" multiple size="30"@if($event->category == 0) disabled @endif>
                        @foreach($groupsSelected as $groupSelected)
                            <option value="{{$groupSelected->id}}">{{$groupSelected->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button class="btn" type="submit">Editar Evento</button>

        </form>


    </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudEvento.js')}}></script>

@endsection
