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


            <a>Editar Aluno</a>

            <form class="form_crud_aluno" method="POST" action="{{ url('/backOffice/users/student/'.$student->id) }}">
                @csrf
                @method('PUT')
                <div class="form_aluno_nome">
                    <label for="fullName">Nome Completo</label>
                    <input type="text"
                           id="fullName"
                           class="custom_input_direct"
                           name="fullName"
                           autocomplete="name"
                           placeholder="Nome do Aluno"
                           value="{{$student->user->fullName}}"
                           required
                           aria-describedby="nameHelp">
                </div>

{{--                <div class="">--}}
                    <div class="form_bundle form_bundle_2">

                    <div class="form_aluno_email">
                        <label for="email">Email</label>
                        <input type="text"
                               id="email"
                               class="custom_input_direct"
                               name="email"
                               autocomplete="email"
                               placeholder="Email do Aluno"
                               value="{{ $student->user->email }}"
                               required
                               aria-describedby="nameHelp">
                    </div>

                    <div class="form_aluno_id">
                        <label for="atec_id">Id</label>
                        <input type="text"
                               id="atec_id"
                               class="custom_input_direct"
                               name="atec_id"
                               autocomplete="id"
                               placeholder="Id do Aluno"
                               value="{{ $student->user->atec_id }}"
                               required
                               aria-describedby="nameHelp">
                    </div>
                </div>


                <div class="form_bundle form_bundle_3">
                    <div class="form_aluno_distrito">
                        <label for="district_id">Distrito:</label>
                        <select class="custom_select_direct tier1" name="district_id" id="district_id">
                            <option value="0" disabled @if($student->parish==null) selected @endif>Selecione o distrito</option>
                            @foreach($districts as $district)
                                <option value="{{$district->id}}"
                                    @if($student->parish!=null && $student->parish->county->district->id == $district->id) selected @endif
                                >{{$district->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form_aluno_concelho">
                        <label for="county_id">Concelho:</label>
                        <select class="custom_select_direct tier2" name="county_id" id="county_id">
                            <option value=""  tier1="" disabled @if($student->parish==null) selected @endif>Selecione o concelho</option>
                            @foreach($counties as $county)
                                <option value="{{$county->id}}" tier1="{{$county->district->id}}"
                                        @if($student->parish!=null && $student->parish->county->id == $county->id) selected @endif
                                >{{$county->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form_aluno_freguesia">
                        <label for="parish_id">Freguesia:</label>
                        <select class="custom_select_direct tier3" name="parish_id" id="parish_id">
                            <option value=""  tier2="" disabled @if($student->parish==null)selected @endif>Selecione a freguesia</option>
                            @foreach($parishes as $parish)
                                <option value="{{$parish->id}}" tier2="{{$parish->county->id}}"
                                    @if($student->parish!=null && $parish->id == $student->parish->id) selected @endif
                                >{{$parish->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form_bundle form_bundle_3">
                    <div class="form_aluno_urlImagem">
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

                    <div class="form_aluno_nickName">
                        <label for="nickName">Retirar Alcunha</label>
                        <div>
                            <div>
                                <label for="nickName">Sim</label>
                                <input id="nickName" type="radio" name="nickName" value="1">
                            </div>
                            <div>
                                <label for="nickName">Não</label>
                                <input id="nickName" type="radio" name="nickName" value="0" checked>
                            </div>
                        </div>
                    </div>
                </div>




                <button class="btn" type="submit">Editar Aluno</button>
            </form>

        </section>

    <script src={{asset('js/backOffice/backOffice_logic_crudAluno_edit.js')}}></script>

@endsection

