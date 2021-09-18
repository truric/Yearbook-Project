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


        <a>Novo Professor</a>

        <form class="form_crud_professor" method="POST" action="{{ url('/backOffice/users/professor') }}">
            @csrf
            <div class="form_professor_nome">
                <label for="fullName">Nome Completo</label>
                <input type="text"
                       id="fullName"
                       class="custom_input_direct"
                       name="fullName"
                       autocomplete="name"
                       placeholder="Nome do Professor"
                       value="{{ old('fullName') }}"
                       required
                       aria-describedby="nameHelp">
            </div>

            <div class="form_bundle form_bundle_2">
                <div class="form_professor_email">
                    <label for="email">Email</label>
                    <input type="email"
                           id="email"
                           class="custom_input_direct"
                           name="email"
                           autocomplete="email"
                           placeholder="Email do Professor"
                           value="{{ old('email') }}"
                           required
                           aria-describedby="nameHelp">
                </div>

                <div class="form_professor_password">
                    <label for="password">Password</label>
                    <input type="text"
                           id="password"
                           class="custom_input_direct"
                           name="password"
                           autocomplete="password"
                           placeholder="Número de contribuinte do Professor (que inicialmente servirá de password)"
                           value="{{ old('password') }}"
                           required
                           aria-describedby="nameHelp">
                </div>
            </div>

            <div >
{{--                class="form_bundle form_bundle_2"--}}
                <div class="form_professor_id">
                    <label for="atec_id">Id</label>
                    <input type="text"
                           id="atec_id"
                           class="custom_input_direct"
                           name="atec_id"
                           autocomplete="id"
                           placeholder="Id do Professor"
                           value="{{ old('atec_id') }}"
                           required
                           aria-describedby="nameHelp">
                </div>

{{--                <div class="form_professor_urlImagem">--}}
{{--                    <label for="urlImagem">Url</label>--}}
{{--                    <input type="text"--}}
{{--                           id="urlImagem"--}}
{{--                           class="custom_input_direct"--}}
{{--                           name="urlImagem"--}}
{{--                           autocomplete="urlImagem"--}}
{{--                           placeholder="Caminho para a imagem do professor"--}}
{{--                           value=""--}}
{{--                           required--}}
{{--                           aria-describedby="nameHelp">--}}
{{--                </div>--}}
            </div>



{{--            <label for="is_area_coordinator">Nível de Permissões</label>--}}

{{--            <div>--}}
                <div class="form_professor_coordenadorArea" >
                    <label for="role" >Níveis de Permissão</label>
                    <div style="margin-top: 5px">
                        <div>
                            <label for="role">Administrador</label>
                            <input id="role" type="radio" name="role" value="1" required>
                        </div>
                        <div>
                            <label for="role">Coordenador de Área</label>
                            <input id="role" type="radio" name="role" value="2" required>
                        </div>
                        <div>
                            <label for="role">Coordenador de Turma</label>
                            <input id="role" type="radio" name="role" value="3" required>
                        </div>
                        <div>
                            <label for="role">Professor</label>
                            <input id="role" type="radio" name="role" value="4" required>
                        </div>

                    </div>
                </div>


{{--            </div>--}}

            <button class="btn" type="submit">Criar Professor</button>
        </form>

    </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudProfessor.js')}}></script>

@endsection
