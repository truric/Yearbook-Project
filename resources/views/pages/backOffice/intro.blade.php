<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="{{ asset('css/backOffice_style.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/backOffice_style_header.css') }}" rel="stylesheet">--}}

</head>
<body>

    <header class="menu_intro">
        <a href="{{ route('logout') }}">Log Out</a>
    </header>

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

        <div id="menuChoice">
        <div>
            <div class="choiceOption">
                <h1>Selecione a turma que quer ver</h1>
                <form method="Put" id="escolherTurmaParaVer" action="">
                    @csrf
{{--                @method('PUT') -->--}}
                    <input type="text" class="inputSearch custom_input" placeholder="Procurar">
                    <select class="custom_select" name="turma_id" id="turma_id" size=5 action="this.form.action=this.value">
                        @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach()
                    </select>
                    <button class="btn" type="submit">Selecione</button>
                </form>
            </div>

            @groupCoordinator
            <div class="choiceOption">
                <h1>Escolha a turma que quer gerir</h1>
                <form method="Get" id="escolherTurmaParaGerir" action="">
                    <input type="text" class="inputSearch custom_input" placeholder="Procurar">
                    <select class="custom_select" name="turma_id" id="turma_id" size=5 action="this.form.action=this.value">
                        @foreach($groupsToEdit as $group)
                            <option value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach()
                    </select>
                    <button class="btn" type="submit" >Selecione</button>
                </form>
            </div>
            @endgroupCoordinator
        </div>
        <div>
            <div class="choiceOption">
                <h1>Enviar Email</h1>
                <button class="btn"
                        onclick="window.location.href='/backOffice/sendemail'"
                >Selecione</button>
            </div>
            <div class="choiceOption">
                <h1>Gerir Eventos</h1>
                <button class="btn"
                        onclick="window.location.href='/backOffice/event/list'"
                >Selecione</button>
            </div>
        </div>

        @areaCoordinator
        <div>
            <div class="choiceOption">
                <h1>Criar Nova Turma</h1>
                <button class="btn" onclick="window.location.href='/backOffice/group'">Selecione</button>
            </div>

{{--        </div>--}}
{{--        <div>--}}
            <div class="choiceOption">
                <h1>Gerir Alunos</h1>
                <button class="btn" onclick="window.location.href='/backOffice/users/student/index'">Selecione</button>
            </div>
            <div class="choiceOption">
                <h1>Gerir Professores</h1>
                <button class="btn" onclick="window.location.href='/backOffice/users/professor/index'">Selecione</button>
            </div>
            <div class="choiceOption">
                <h1>Gerir Areas e Cursos</h1>
                <button class="btn" onclick="window.location.href='/backOffice/atec'">Selecione</button>
            </div>
        </div>

        </div>
        @endareaCoordinator
        </div>
    </section>



    <script src={{asset('js/backOffice/backOffice_logic_intro.js')}}></script>


</body>
</html>
