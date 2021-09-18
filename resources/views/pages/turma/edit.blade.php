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

{{--        <div class="turma_edit_btns2" style="margin:0px; padding:0px;     justify-content: right;">--}}
{{--            <button class="btn" type="button"  onclick="apagarTurma({{$group->id}})">Eliminar turma</button>--}}
{{--        </div>--}}

        <div class="mini-menu">
            <a class="">Turma</a>
            <a class="opacity40">Alunos</a>
            <a class="opacity40">Professores</a>
            <a class="opacity40">Eventos</a>
        </div>




        <div class="turma_eventos hidden">

            <div class="mini_menu_sub">
                <button class="btn" type="reset" onclick="window.location.href='/backOffice/event'">Inserir Evento</button>
            </div>

            <input type="text" class="inputSearch custom_input" id="searchEventos" placeholder="Procurar Eventos">
            <div style="overflow-x: auto;" >
                <table id="table_eventos">
                    <thead>
                        <tr>
    {{--                        <th>ID</th>--}}
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                    <tr>
{{--                        <td>{{$event->id}}</td>--}}
                        <td>{{$event->name}}</td>
                        <td>
                            @if($event->description)
                                {{$event->description}}
                            @else
                                'sem descrição'
                            @endif
                        </td>
                        <td>
                            @if($event->category == 0)
                                Evento de Turma
                            @elseif($event->category == 1)
                                Visita de Estudo
                            @elseif($event->category == 2)
                                Palestra
                            @endif
                        </td>
                        <td>
                            <div class="links_crud">
                                @if($event->category == 0)
                                    Este evento não pode ser apagado nem alterado
                                @else

                                <form method="Get" action="{{url('backOffice/event/'.$event->id.'/edit')}}">
                                    <button class="btn" type="submit" >Editar</button>
                                </form>

                                <form method="POST" action="{{url('backOffice/event/'.$event->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit">Eliminar</button>
                                </form>
                                @endif
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>


        </div>

        <form id="gerirTurma" method="POST" action="{{ url('/backOffice/group/'.$group->id) }}">
            @csrf
            @method('PUT')
            <div class="crudTurma" >
                <div class="form_bundle form_bundle_3">
                    <div class="form_turma_month">
                        <label for="month">Mês:</label>
                        <select class="custom_select_direct" name="month" id="month">
                            <option value="" disabled>Selecione o mês</option>
                            <option value="1"  @if($group->month == 1)  selected @endif>Janeiro</option>
                            <option value="2"  @if($group->month == 2)  selected @endif>Fevreiro</option>
                            <option value="3"  @if($group->month == 3)  selected @endif>Março</option>
                            <option value="4"  @if($group->month == 4)  selected @endif>Abril</option>
                            <option value="5"  @if($group->month == 5)  selected @endif>Maio</option>
                            <option value="6"  @if($group->month == 6)  selected @endif>Junho</option>
                            <option value="7"  @if($group->month == 7)  selected @endif>Julho</option>
                            <option value="8"  @if($group->month == 8)  selected @endif>Agosto</option>
                            <option value="9"  @if($group->month == 9)  selected @endif>Setembro</option>
                            <option value="10" @if($group->month == 10) selected @endif>Outubro</option>
                            <option value="11" @if($group->month == 11) selected @endif>Novembro</option>
                            <option value="12" @if($group->month == 12) selected @endif>Dezembro</option>
                        </select>
                    </div>

                    <div class="form_turma_year">
                        <label for="year">Ano:</label>
                        <input type="number"
                               id="year"
                               class="custom_input_direct"
                               name="year"
                               autocomplete="ano"
                               placeholder="Ano em que a turma foi formada"
                               value={{$group->year}}
                               required
                               aria-describedby="nameHelp">
                    </div>

                    <div class="form_turma_month">
                        <label for="city">Cidade:</label>
                        <select class="custom_select_direct" name="city" id="city" required>
                            <option value="" disabled selected>Selecione a cidade</option>
                            <option value="P" @if($group->city == 'P') selected @endif>Porto</option>
                            <option value="L" @if($group->city == 'L') selected @endif>Lisboa</option>
                        </select>
                    </div>
                </div>

                <div class="form_turma_area">
                    <label for="area">Área:</label>
                    <select class="custom_select_direct tier1" name="area" id="area">
                        <option value="0" selected disabled>Selecione o área</option>
                        @foreach($areas as $area)
                            <option value="{{$area->id}}"
                                    @if($area->id == $group->degree->area_id) selected @endif
                                >{{$area->name}}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="form_turma_curso">
                    <label for="degree_id">Curso:</label>
                    <select class="custom_select_direct tier2" name="degree_id" id="degree_id">
                        <option value="" tier1="0" disabled selected>Selecione o curso</option>
                        @foreach($degrees as $degree)
                            <option value="{{$degree->id}}" tier1="{{$degree->area_id}}" @if($degree->id == $group->degree_id) selected @endif
                                >{{$degree->name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form_turma_coordenador">
                    <label for="coordinator_id">Coordenador de Turma:</label>
                    <input type="text" class="inputSearch custom_input" placeholder="Search..">
                    <select class="custom_select" name="coordinator_id" id="coordinator_id" size=4>
                        @foreach($professors as $professor)
                            <option value="{{$professor->id}}"
                                    @if($professor->id == $group->coordinator_id) selected @endif
                            >{{$professor->user->simpleName}}</option>
                        @endforeach
                    </select>
                </div>

            </div>




            <div class="turma_alunos hidden">

                <div class="coluna_procurar_alunos">
                    <!-- <form method="Get" > -->
                    <input type="text" class="inputSearch custom_input" placeholder="Procurar alunos para a turma">
                    <select class="custom_select coluna_procurar_alunos_select" multiple size="30">
                        @foreach($studentsLook as $studentLook)
                        <option value="{{$studentLook->id}}">{{$studentLook->user->atec_id}} - {{$studentLook->user->simpleName}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="setas">
                    <a class="right_arrow_alunos">
                        <img src={{asset('fixed/icons/big-right-arrow.png')}}>

                    </a>
                    <a class="left_arrow_alunos">
                        <img src={{asset('fixed/icons/big-left-arrow.png')}}>

                    </a>

                </div>

                <div class="coluna_selecionar_alunos">
                    <input type="text" class="inputSearch custom_input" placeholder="Procurar alunos da turma">
                    <select class="custom_select coluna_selecionar_alunos_select" name="studentsArray[]" multiple size="30">
                        @foreach($studentsSelected as $studentSelected)
                            <option value="{{$studentSelected->id}}">{{$studentSelected->user->atec_id}} - {{$studentSelected->user->simpleName}}</option>
                        @endforeach
                    </select>

                    <div class="form_turma_delegado">
                        <label for="delegado">Delegado da Turma:</label>
                        <select class="custom_select_direct turma_delegado" name="delegado" id="area">
                            <option value="0" selected>Selecione o delegado de turma</option>
                            @foreach($studentsSelected as $studentSelected)
                                <option value="{{$studentSelected->id}}"
                                    @if($studentSelected->category==1) selected @endif
                                >{{$studentSelected->user->atec_id}} - {{$studentSelected->user->simpleName}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form_turma_subdelegado">
                        <label for="subdelegado">Sub-Delegado da Turma:</label>
                        <select class="custom_select_direct turma_subdelegado" name="subdelegado" id="area">
                            <option value="0" selected>Selecione o sub-delegado de turma</option>
                            @foreach($studentsSelected as $studentSelected)
                                <option value="{{$studentSelected->id}}"
                                        @if($studentSelected->category==2) selected @endif
                                >{{$studentSelected->user->atec_id}} - {{$studentSelected->user->simpleName}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

            </div>


            <div class="turma_professores hidden">

                <div class="coluna_procurar_professores">
                    <input type="text" class="inputSearch custom_input" id="searchEvento" placeholder="Procurar professores">
                    <select class="custom_select coluna_procurar_professores_select" name="turma_id" multiple size="30">
                        @foreach($professorsLook as $professorLook)
                            <option value="{{$professorLook->id}}">{{$professorLook->user->atec_id}} - {{$professorLook->user->simpleName}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="setas">
                    <a class="right_arrow_professores">
                        <img src={{asset('fixed/icons/big-right-arrow.png')}}>

                    </a>
                    <a class="left_arrow_professores">
                        <img src={{asset('fixed/icons/big-left-arrow.png')}}>

                    </a>
                </div>

                <div class="coluna_selecionar_professores">
                    <input type="text" class="inputSearch custom_input" placeholder="Procurar professores">
                    <select class="custom_select coluna_selecionar_professores_select" name="professorsArray[]" multiple size="30">
                        @foreach($professorsSelected as $professorSelected)
                            <option value="{{$professorSelected->id}}">{{$professorSelected->user->atec_id}} - {{$professorSelected->user->simpleName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

{{--            <div class="turma_edit_btns">--}}
{{--                <button class="btn" form="gerirTurma" type="submit">Atualizar turma</button>--}}

{{--                <button class="btn" type="button" onclick="apagarTurma({{$group->id}})">Eliminar turma</button>--}}
{{--                <form method="POST" action="{{ url('/backOffice/group/'.$group->id) }}" >--}}
{{--                    @csrf--}}
{{--                    @method('PUT')--}}
{{--                    <button class="btn" type="button" onclick="apagarTurma({{$group->id}})">Eliminar turma</button>--}}
{{--                </form>--}}
{{--            </div>--}}

        </form>


            <div class="turma_edit_btns">
                <button class="btn" form="gerirTurma" type="submit">Atualizar Turma</button>
                <form method="POST" action="{{ url('/backOffice/group/'.$group->id) }}">
                    @csrf
                    @method('DELETE')
{{--                    <button class="btn" type="button" onclick="apagarTurma({{$group->id}})">Eliminar turma</button>--}}
                    <button class="btn" type="submit">Eliminar Turma</button>
                </form>
            </div>
    </section>

    <script src={{asset('js/backOffice/backOffice_logic_gerirTurma.js')}}></script>


@endsection
