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


        <a>Editar Professor</a>

        <form class="form_crud_professor" method="POST" action="{{ url('/backOffice/users/professor/'.$professor->id) }}">
            @csrf
            @method('PUT')
            <div class="form_professor_nome">
                <label for="fullName">Nome Completo</label>
                <input type="text"
                       id="fullName"
                       class="custom_input_direct"
                       name="fullName"
                       autocomplete="name"
                       placeholder="Nome do Professor"
                       value="{{ $professor->user->fullName }}"
                       aria-describedby="nameHelp">
            </div>

{{--            <div >--}}
                <div class="form_bundle form_bundle_2">

                    <div class="form_professor_email">
                        <label for="email">Email</label>
                        <input type="email"
                               id="email"
                               class="custom_input_direct"
                               name="email"
                               autocomplete="email"
                               placeholder="Email do Professor"
                               value="{{ $professor->user->email }}"
                               aria-describedby="nameHelp">
                    </div>
                    <div class="form_professor_id">
                        <label for="atec_id">Id</label>
                        <input type="text"
                               id="atec_id"
                               class="custom_input_direct"
                               name="atec_id"
                               autocomplete="id"
                               placeholder="Id do Professor"
                               value="{{ $professor->user->atec_id }}"
                               required
                               aria-describedby="nameHelp">
                    </div>


                </div>

            <div class="form_bundle form_bundle_2">


                <div class="form_professor_coordenadorArea" >
                    <label for="role" style="margin-bottom: 50px">Níveis de Permissão</label>
                    <div style="margin-top: 5px">
                        <div>
                            <label for="role">Administrador</label>
                            <input id="role" type="radio" name="role" value="1" @if($professor->user->role == 1) checked @endif required>
                        </div>
                        <div>
                            <label for="role">Coordenador de Área</label>
                            <input id="role" type="radio" name="role" value="2" @if($professor->user->role == 2) checked @endif required>
                        </div>
                        <div>
                            <label for="role">Coordenador de Turma</label>
                            <input id="role" type="radio" name="role" value="3" @if($professor->user->role == 3) checked @endif required>
                        </div>
                        <div>
                            <label for="role">Professor</label>
                            <input id="role" type="radio" name="role" value="4" @if($professor->user->role == 4) checked @endif required>
                        </div>

                    </div>
                </div>

                <div class="form_professor_urlImagem">
                    <label for="urlImagem">Repor a Imagem Original</label>
                    <div>
                        <div>
                            <label for="urlImagem">Sim</label>
                            <input id="urlImagem" type="radio" name="urlImagem" value="1">
                        </div>
                        <div>
                            <label for="urlImagem">Não</label>
                            <input id="urlImagem" type="radio" name="urlImagem" value="0" checked>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn" type="submit">Editar Professor</button>
        </form>

    </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudProfessor.js')}}></script>

@endsection
