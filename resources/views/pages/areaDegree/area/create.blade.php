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

        <a>Nova Área</a>

        <form class="form_crud_area" method="POST" action="{{ url('/backOffice/atec/area') }}">
            @csrf
            <div class="form_area_nome">
                <label for="name">Nome da área</label>
                <input type="text"
                       id="name"
                       class="custom_input_direct"
                       name="name"
                       autocomplete="nome"
                       placeholder="Nome da Área"
                       value="{{ old('name') }}"
                       required
                       aria-describedby="nameHelp">
            </div>

            <div class="form_evento_descricao">
                <label for="description">Descrição da Área:</label>
                <textarea
                    id="description"
                    name="description"
                    autocomplete="description"
                    placeholder="Descrição da Area"
                    class="custom_input_direct textarea_input"
                    aria-describedby="nameHelp"></textarea>
            </div>

            <div class="form_area_coordenador">
                <label for="coordinator_id">Coordenador de Área:</label>
                <input type="text" class="inputSearch custom_input" placeholder="Search..">
                <select class="custom_select" name="coordinator_id" id="coordinator_id" size=4 required>
                    @foreach($professors as $professor)
                        <option value="{{$professor->id}}">{{$professor->user->simpleName}}</option>
                    @endforeach
                </select>
            </div>


            <button class="btn" type="submit">Criar Área</button>

        </form>
    </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudArea.js')}}></script>


@endsection()
