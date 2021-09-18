@extends('backOffice.main')

@section('content')

    <section id="gerirAreasCursos" class="gerir">


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


        <div class="mini-menu">
            <a class="">Areas</a>
            <a class="opacity40">Cursos</a>
        </div>

        <div class="mini_menu_sub">
            <div class="mini_menu_areas">
                <button class="btn" onclick="window.location.href='/backOffice/atec/area'">Inserir Area</button>
            </div>

            <div class="mini_menu_cursos hidden">
                <button class="btn" onclick="window.location.href='/backOffice/atec/degree'">Inserir Curso</button>
            </div>
        </div>



        <input type="text" class="inputSearch custom_input" id="searchAreas" placeholder="Procurar Areas">
{{--        <div style="overflow-x: auto;" class="table-users">--}}
            <div class="pre_table">
            <table id="table_areas" class="table-users">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Coordenador de Área</th>
                    <th>Opções</th>
                </tr>
                </thead>

                <tbody>
                @foreach($areas as $area)
                    <tr>

                        <td>{{$area->id}}</td>
                        <td>{{$area->name}}</td>

                        <td>
                            @if($area->coordinator_id)
                                {{$area->coordinator->user->simpleName}}
                            @endif
                        </td>

                        <td >

                            <div class="links_crud">
                                <form method="GET" action="{{url('backOffice/atec/area/'.$area->id.'/edit')}}">
                                    <button class="btn" type="submit">Editar</button>
                                </form>

                                <form action="{{url('backOffice/atec/area/'.$area->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit">Eliminar</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

{{--            {{ $areas->links() }}--}}
        </div>



        <input type="text" class="inputSearch custom_input hidden" id="searchCursos" placeholder="Procurar Cursos">
{{--        <div style="overflow-x: auto;" class="table-users hidden" >--}}
        <div class="pre_table hidden">
            <table id="table_cursos" class="table-users">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Area</th>
                    <th>Coordenador de Curso</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($degrees as $degree)
                <tr>
                    <td>{{$degree->id}}</td>
                    <td>{{$degree->name}}</td>
                    <td>
                        @if($degree->area)
                            {{$degree->area->name}}
                        @else
                            SEM ÁREA - Pode causar erros - Fale com um adminstrador para corrigir este erro
                        @endif
                    </td>

                    <td>
                        @if($degree->coordinator_id)
                            {{$degree->coordinator->user->simpleName}}
                        @endif
                    </td>
                    <td >
                        <div class="links_crud">

                            <form method="GET" action="{{url('backOffice/atec/degree/'. $degree->id.'/edit')}}">
                                <button class="btn" type="submit">Editar</button>
                            </form>

                            <form action="{{url('backOffice/atec/degree/'.$degree->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit">Eliminar</button>
                            </form>

                        </div>

                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
{{--            {{ $areas->links() }}--}}
        </div>



    </section>

    <script src={{asset('js/backOffice/backOffice_logic_gerirAreasCursos.js')}}></script>


@endsection
