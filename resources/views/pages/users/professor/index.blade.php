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


        <div class="mini_menu_sub">
            <div class="mini_menu_professores">
                <button class="btn" type="submit" onclick="window.location.href='/backOffice/users/professor'">Inserir Professor</button>
                <form method="POST" action="{{url('/backOffice/users/professor/import')}}" enctype="multipart/form-data">
                    @csrf
                    <label for="file_professores" class="" id="label_file_professores">Selecione Ficheiro</label>
                    <input type="file" name="file_professores" id="file_professores">
                    <button class="btn_submit disabled_color disabled_color_border" id="btn_file_professores" disabled>Import Excel</button>
                </form>

                <button class="btn" onclick="window.location.href='/backOffice/users/professor/export'">Download Excel dos Professores</button>

            </div>
        </div>


            <input type="text" class="inputSearch custom_input" id="searchProfessores" placeholder="Procurar Professores">

            {{--        <div style="overflow-x:auto">--}}
            <div class="pre_table">
                <table class="table-users" id="table_professores"  >
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Imagem</th>
                        <th>Turmas</th>
                        <th>Turmas que Coordenada</th>

                        <th>Nível de Permissão</th>
                        <th>Opções</th>
                    </tr>
                    @foreach($professors as $professor)
                        <tr>
                            <td>{{$professor->user->atec_id}}</td>
                            <td>{{$professor->user->simpleName}}</td>
                            <td>{{$professor->user->email}}</td>
                            <td>
                                <img src="{{$professor->user->url}}">
                            </td>
                            <td>
                                @foreach($professor->groups as $group)
                                    {{$group->name}}
                                @endforeach
                            </td>

                            <td>
                                @foreach($professor->coordinatedGroups as $group)
                                    {{$group->name}}
                                    <br>
                                @endforeach
                            </td>

                            <td>
                                @if($professor->user->role == 1)
                                    Administrador
                                @elseif($professor->user->role == 2)
                                    Coordenador de Área
                                @elseif($professor->user->role == 3)
                                    Coordenador de Turma
                                @elseif($professor->user->role == 4)
                                    Professor
                                @endif
                            </td>

                            <td>

                                <div class="links_crud">
                                    <form method="GET" action="{{url('backOffice/users/professor/'.$professor->id.'/edit')}}" >
                                        <button type="submit">Editar</button>
                                    </form>

                                    @if($professor->user->role != 1)
                                        <form action="{{url('backOffice/users/professor/'.$professor->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Eliminar</button>
                                        </form>
                                    @endif

                                </div>
                            </td>
                        </tr>
                    @endforeach


                </table>
                {{ $professors->links() }}

            </div>

    </section>

    <script src={{asset('js/backOffice/backOffice_logic_ProfessorsIndex.js')}}></script>


@endsection
