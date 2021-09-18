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


            <a>Novo Aluno</a>

            <form class="form_crud_aluno" method="POST" action="{{ url('/backOffice/users/student') }}">
                @csrf
                <div class="form_aluno_nome">
                    <label for="fullName">Nome Completo</label>
                    <input type="text"
                           id="fullName"
                           class="custom_input_direct"
                           name="fullName"
                           autocomplete="name"
                           placeholder="Nome do Aluno"
                           value=""
                           required
                           aria-describedby="nameHelp">
                </div>

                <div class="form_bundle form_bundle_2">
                    <div class="form_aluno_email">
                        <label for="email">Email</label>
                        <input type="email"
                               id="email"
                               class="custom_input_direct"
                               name="email"
                               autocomplete="email"
                               placeholder="Email do Aluno"
                               value="{{ old('email') }}"
                               required
                               aria-describedby="nameHelp">
                    </div>

                    <div class="form_aluno_password">
                        <label for="password">Password</label>
                        <input type="text"
                               id="password"
                               class="custom_input_direct"
                               name="password"
                               autocomplete="password"
                               placeholder="Número de contrinuinte do Aluno (que inicialmente servirá de password)"
                               value="{{ old('password') }}"
                               required
                               aria-describedby="nameHelp">
                    </div>
                </div>


                <div class="">
{{--                    <div class="form_bundle form_bundle_2">--}}

                    <div class="form_aluno_id">
                        <label for="atec_id">Id</label>
                        <input type="text"
                               id="atec_id"
                               class="custom_input_direct"
                               name="atec_id"
                               autocomplete="id"
                               placeholder="Id do Aluno"
                               value="{{ old('atec_id') }}"
                               required
                               aria-describedby="nameHelp">
                    </div>

{{--                    <div class="form_aluno_urlImagem">--}}
{{--                        <label for="urlImagem">Url</label>--}}
{{--                        <input type="text"--}}
{{--                               id="urlImagem"--}}
{{--                               class="custom_input_direct"--}}
{{--                               name="urlImagem"--}}
{{--                               autocomplete="urlImagem"--}}
{{--                               placeholder="Caminho para a imagem do aluno"--}}
{{--                               value=""--}}
{{--                               required--}}
{{--                               aria-describedby="nameHelp">--}}
{{--                    </div>--}}
                </div>

                <div class="form_bundle form_bundle_3">
                    <div class="form_aluno_distrito">
                        <label for="district_id">Distrito:</label>
                        <select class="custom_select_direct tier1" name="district_id" id="district_id">
                            <option value="0" selected disabled>Selecione o distrito</option>
                            @foreach($districts as $district)
                                <option value="{{$district->id}}">{{$district->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form_aluno_concelho">
                        <label for="county_id">Concelho:</label>
                        <select class="custom_select_direct tier2" name="county_id" id="county_id" disabled>
                            <option value="0"  tier1="0" selected disabled>Selecione o concelho</option>
{{--                            @foreach($counties as $county)--}}
{{--                                <option value="{{$county->id}}" tier1="{{$county->district->id}}">{{$county->name}}</option>--}}
{{--                            @endforeach--}}
                        </select>
                    </div>

                    <div class="form_aluno_freguesia">
                        <label for="parish_id">Freguesia:</label>
                        <select class="custom_select_direct tier3" name="parish_id" id="parish_id" disabled required>
                            <option value="0"  tier2="0" disabled selected>Selecione a freguesia</option>
{{--                            @foreach($parishes as $parish)--}}
{{--                                <option value="{{$parish->id}}" tier2="{{$parish->county->id}}">{{$parish->name}}</option>--}}
{{--                            @endforeach--}}
                        </select>
                    </div>
                </div>

                <button class="btn" type="submit">Criar Aluno</button>
            </form>

        </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudAluno.js')}}></script>

@endsection

