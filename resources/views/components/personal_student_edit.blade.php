<form class="component" enctype="multipart/form-data" method="POST" action="{{ url('/user/'.$user->id) }}">
    @csrf
    @method('PUT')
    <div class="form_aluno_nome">
        <label for="name">Nome</label>
        <input type="text"
               class="custom_input_direct"
               name="name"
               autocomplete="name"
               placeholder="Nome do Aluno"
               value='{{$user->fullName}}'
               required
               aria-describedby="nameHelp">
    </div>

    <div class="form_bundle form_bundle_2">
        <div class="form_aluno_nome">
            <label for="email">Email</label>
            <input type="text"
                   class="custom_input_direct"
                   name="email"
                   autocomplete="email"
                   placeholder="Email do Aluno"
                   value="{{$user->email}}"
                   required
                   aria-describedby="nameHelp">
        </div>

        <div class="form_aluno_nome">
            <label for="phone">Telefone</label>
            <input type="number"
                   class="custom_input_direct"
                   name="phone"
                   autocomplete="phone"
                   placeholder="Telefone do Aluno"
                   value="{{$user->student->phone}}"
                   aria-describedby="nameHelp">
        </div>
    </div>





    <div class="form_bundle form_bundle_2">
        <div class="form_aluno_urlImagem">
            <label for="urlImagem">Foto de Perfil</label>
            <input type="file"
                   id="urlImagem"
                   class="custom_input_direct"
                   name="urlImagem"
                   autocomplete="urlImagem"
                   placeholder="Seleciona a imagem do aluno"
                   value=""
                   aria-describedby="nameHelp">
        </div>
        <div class="form_aluno_nome">
            <label for="nickname">Alcunha</label>
            <input type="text"
                   class="custom_input_direct"
                   name="nickname"
                   placeholder="Alcunha do Aluno"
                   maxlength="15"
                   value="{{$user->student->nickname}}"
                   aria-describedby="nameHelp">
        </div>
    </div>



    <div class="form_bundle form_bundle_3">
        <div class="form_aluno_distrito">
            <label for="district">Distrito:</label>
            <select class="custom_select_direct tier1" name="district" id="district">
                <option value="0" disabled @if($user->student->parish==null) selected @endif> Selecione o distrito</option>
                @foreach($districts as $district)
                    <option value="{{$district->id}}"
                            @if($user->student->parish!=null && $user->student->parish->county->district->id == $district->id) selected @endif
                    >{{$district->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form_aluno_concelho">
            <label for="county">Concelho:</label>
            <select class="custom_select_direct tier2" name="county" id="county">
                <option value="0"  tier1="" disabled @if($user->student->parish==null) selected @endif>Selecione o concelho</option>
                @foreach($counties as $county)
                    <option value="{{$county->id}}" tier1="{{$county->district->id}}"
                            @if($user->student->parish!=null && $user->student->parish->county->id == $county->id) selected @endif
                    >{{$county->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form_aluno_freguesia">
            <label for="parish">Freguesia:</label>
            <select class="custom_select_direct tier3" name="parish" id="parish">
                <option value="0"  tier2="0" disabled @if($user->student->parish==null)selected @endif>Selecione a freguesia</option>
                @foreach($parishes as $parish)
                    <option value="{{$parish->id}}" tier2="{{$parish->county->id}}"
                            @if($user->student->parish!=null && $parish->id == $user->student->parish->id) selected @endif
                    >{{$parish->name}}</option>
                @endforeach
            </select>
        </div>
    </div>





    <div class="form_bundle form_bundle_3">

        <div class="form_aluno_nome">
            <label for="current_password">Atual Password</label>
            <input type="password"
                   class="custom_input_direct"
                   name="current_password"
                   autocomplete="nome"
                   placeholder="Nome do Aluno"
                   value=""
                   aria-describedby="nameHelp">
        </div>

        <div class="form_aluno_nome">
            <label for="new_password">Nova Password</label>
            <input type="password"
                   class="custom_input_direct"
                   name="new_password"
                   autocomplete="new_password"
                   placeholder="Nova password do Aluno"
                   value=""
                   aria-describedby="nameHelp">
        </div>

        <div class="form_aluno_nome">
            <label for="new_password2">Nova Password</label>
            <input type="password"
                   class="custom_input_direct"
                   name="new_password2"
                   autocomplete="new_password2"
                   placeholder="Nova password do Aluno"
                   value=""
                   aria-describedby="nameHelp">
        </div>
    </div>


    <div class="form_bundle form_bundle_3">
        <div>
            <label for="permissionEmail">Autorizo a divulgação do meu Email</label>
            <div>
                <div>
                    <input type="radio" name="permissionEmail" value="1" @if($user->permissionEmail == 1) checked @endif>
                    <label class="label_radio" for="permissionEmail">Sim</label>

                </div>
                <div>
                    <input type="radio" name="permissionEmail" value="0" @if($user->permissionEmail == 0) checked @endif>
                    <label class="label_radio" for="permissionEmail">Não</label>
                </div>
            </div>
        </div>


        <div>
            <label for="permissionPhone">Autorizo a divulgação do meu telefone</label>
            <div>
                <div>
                    <input type="radio" name="permissionPhone" value="1" @if($user->student->permissionPhone == 1) checked @endif>
                    <label class="label_radio" for="permissionPhone">Sim</label>
                </div>
                <div>
                    <input type="radio" name="permissionPhone" value="0" @if($user->student->permissionPhone == 0) checked @endif>
                    <label class="label_radio" for="permissionPhone">Não</label>
                </div>
            </div>
        </div>


        <div>
            <label id="submit_form_student_edit" for="permissionAddress">Autorizo a divulgação da minha morada</label>
            <div>
                <div>
                    <input id="permissionAddress_check2" onclick="deleteConfirmation({{$user->id}})" type="radio" name="permissionAddress" value=2 @if($user->student->permissionAddress == 2) checked @endif>
                    <label class="label_radio" for="permissionAddress">Sim, incluindo as minhas coordenadas</label>
                </div>
                <div>
                    <input id="permissionAddress_check1" type="radio" name="permissionAddress" value=1 @if($user->student->permissionAddress == 1) checked @endif>
                    <label class="label_radio" for="permissionAddress">Apenas a minha freguesia</label>
                </div>
                <div>
                    <input id="permissionAddress_check0" type="radio" name="permissionAddress" value=0 @if($user->student->permissionAddress == 0) checked @endif>
                    <label class="label_radio" for="permissionAddress">Não</label>
                </div>

                <input class="hidden" type="text" name="latitude" id="latitude" value="">
                <input class="hidden" type="text" name="longitude" id="longitude" value="">
            </div>
        </div>
    </div>

{{--    <button class="btn" type="submit">Autilizar Perfil</button>--}}
    <button
        type="submit"
        class="border border-blue-500 bg-blue-500 mt-4
        text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline"
        style="justify-self: center; align-self: center; min-width: 120px; width: auto;"
    >
        Autilizar Perfil
    </button>
</form>


<div class="modal_edit fixed top-0 left-0 w-screen h-screen flex items-center transform opacity-100 justify-center bg-white scale-0 duration-300 z-100">

        <div class="loading_container">
            <div class="loading">
                <img id="Ball" src={{asset('fixed/images/AtecLogoSolo.png')}}>
                <img id="Title" src={{asset('fixed/images/AtecLogoLettering.png')}}>
            </div>
            <div class="barrier">

            </div>
        </div>
</div>


