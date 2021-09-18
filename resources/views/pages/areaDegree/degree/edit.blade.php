@extends('backOffice.main')

@section('content')

    <section >

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

        <a>Editar Curso</a>

        <form class="form_crud_curso" method="POST" action="{{ url('/backOffice/atec/degree/'.$degree->id) }}">
            @csrf
            @method('PUT')
            <div class="form_curso_nome">
                <label for="name">Nome do curso</label>
                <input type="text"
                       id="name"
                       class="custom_input_direct"
                       name="name"
                       autocomplete="nome"
                       placeholder="Nome do Curso"
                       value="{{ $degree->name }}"
                       required
                       aria-describedby="nameHelp">
            </div>
            <div class="form_bundle form_bundle_2">
                <div class="form_turma_area">
                    <label for="area_id">Área:</label>
                    <select class="custom_select_direct tier1" name="area_id" id="area_id" required>
                        @foreach($areas as $area)
                            <option value="{{$area->id}}" @if($degree->area_id == $area->id)selected @endif>{{$area->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form_curso_nome">
                    <label for="code">Código do curso</label>
                    <input type="text"
                           id="code"
                           class="custom_input_direct"
                           name="code"
                           autocomplete="nome"
                           placeholder="Nome do Curso"
                           value="{{ $degree->code}}"
                           required
                           aria-describedby="nameHelp">
                </div>
            </div>
            <div class="form_evento_descricao">
                <label for="description">Descrição do Curso:</label>
                <textarea
                    id="description"
                    name="description"
                    autocomplete="description"
                    placeholder="Descrição do Curso"
                    class="custom_input_direct textarea_input"
                    aria-describedby="nameHelp">{{$degree->description}}</textarea>
            </div>

            <div class="form_area_coordenador">
                <label for="coordinator_id">Coordenador de Curso:</label>
                <input type="text" class="inputSearch custom_input" placeholder="Search..">
                <select class="custom_select" name="coordinator_id" id="coordinator_id" size=4 required>
                    @foreach($professors as $professor)
                        <option value="{{$professor->id}}" @if($degree->coordinator_id == $professor->id)selected @endif>{{$professor->user->simpleName}}</option>
                    @endforeach
                </select>
            </div>


            <button class="btn" type="submit">Atualizar Curso</button>

        </form>


    </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudCurso.js')}}></script>

@endsection
