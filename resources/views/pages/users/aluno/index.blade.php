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


{{--        <div class="mini-menu">--}}
{{--            <a class="">Alunos</a>--}}
{{--            <a class="opacity40">Professores</a>--}}
{{--        </div>--}}

        <div class="mini_menu_sub">
            <div class="mini_menu_alunos ">

                <button class="btn" type="submit" onclick="window.location.href='/backOffice/users/student'">Inserir Aluno</button>
                <form method="POST" action="{{url('/backOffice/users/student/import')}}" enctype="multipart/form-data">
                    @csrf
                    <label for="file_alunos" id="label_file_alunos">Selecione Ficheiro</label>
                    <input type="file" name="file_alunos" id="file_alunos">
                    <button class="btn_submit disabled_color disabled_color_border"id="btn_file_alunos">Import Excel</button>
                </form>

                <button class="btn" onclick="window.location.href='/backOffice/users/student/export'">Download Excel dos Alunos</button>
            </div>

        </div>

        <input type="text" class="inputSearch custom_input " id="searchAlunos" placeholder="Procurar Alunos">

            <div class="pre_table">
            <table class="table-users" id="table_alunos">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Alcunha</th>
                    <th>Email</th>
                    <th>Imagem</th>
                    <th>Turma</th>
                    <th>Freguesia</th>
                    <th>Opções</th>
                </tr>
                </thead>

                <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->user->atec_id}}</td>
                    <td>{{$student->user->simpleName}}</td>
                    <td>
                        @if($student->nickname)
                            {{$student->nickname}}

                        @endif
                    </td>
                    <td>{{$student->user->email}}</td>
                    <td>
                        @if($student->user->url)
                            <img src="{{$student->user->url}}">
                        @endif
                    </td>
                    <td>@if($student->group)
                        {{$student->group->name}}
                        @else
                        @endif
                    </td>
                    <td>
                        @if($student->parish)
                            {{$student->parish->name}}
                        @else
                        @endif
                    </td>
                    <td >
                        <div class="links_crud">

                            <div class="links_crud">
                                <form method="GET" action="{{url('backOffice/users/student/'.$student->id.'/edit')}}" >
                                    <button type="submit">Editar</button>
                                </form>

                                <form action="{{url('backOffice/users/student/'.$student->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            {{ $students->links() }}


        </div>



    </section>


    <script src={{asset('js/backOffice/backOffice_logic_AlunosIndex.js')}}></script>


@endsection
