@extends('backOffice.main')

@section('content')
    <section id="gerirTurma">
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

        <a>Nova Turma</a>

        <form class="form_crud_turma" method="POST" action="{{ url('/backOffice/group/') }}">
            @csrf
            <div class="form_bundle form_bundle_3">
                <div class="form_turma_month">
                    <label for="month">Mês:</label>
                    <select class="custom_select_direct" name="month" id="month" required>
                        <option value="" disabled selected>Selecione o mês</option>
                        <option value="1" >Janeiro</option>
                        <option value="2" >Fevreiro</option>
                        <option value="3" >Março</option>
                        <option value="4" >Abril</option>
                        <option value="5" >Maio</option>
                        <option value="6" >Junho</option>
                        <option value="7" >Julho</option>
                        <option value="8" >Agosto</option>
                        <option value="9" >Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                </div>

                <div class="form_turma_year">
                    <label for="year">Ano:</label>
                    <input type="number"
                           id="year"
                           class="custom_input_direct"
                           name="year"
                           autocomplete="year"
                           placeholder="Ano em que a turma foi formada"
                           required
                           value={{ old('year') }}
                           aria-describedby="nameHelp">
                </div>

                <div class="form_turma_month">
                    <label for="city">Cidade:</label>
                    <select class="custom_select_direct" name="city" id="city" required>
                        <option value="" disabled selected>Selecione a cidade</option>
                        <option value="P">Porto</option>
                        <option value="L">Lisboa</option>
                    </select>
                </div>
            </div>

            <div class="form_turma_area">
                <label for="area">Área:</label>
                <select class="custom_select_direct tier1" name="area" id="area" required>
                    <option value="0" selected disabled>Selecione o área</option>
                    @foreach($areas as $area)
                    <option value="{{$area->id}}">{{$area->name}}</option>
                    @endforeach()
                </select>
            </div>

            <div class="form_turma_curso">
                <label for="degree_id">Curso:</label>
                <select class="custom_select_direct tier2" name="degree_id" id="degree_id" disabled required>
                    <option value=""  tier1="0" disabled selected>Selecione o curso</option>

                    @foreach($degrees as $degree)
                        <option value="{{$degree->id}}" tier1="{{$degree->area->id}}">{{$degree->name}}</option>
                    @endforeach()

                </select>
            </div>

            <div class="form_turma_coordenador">
                <label for="coordinator_id">Coordenador de Turma:</label>
                <input type="text" class="inputSearch custom_input" placeholder="Search..">
                <select class="custom_select" name="coordinator_id" id="coordinator_id" size=4 required>
                    @foreach($professors as $professor)
                        <option value="{{$professor->id}}">{{$professor->user->simpleName}}</option>
                    @endforeach

                </select>
            </div>

            <button class="btn" type="submit">Criar Turma</button>
        </form>


    </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudTurma.js')}}></script>

@endsection
