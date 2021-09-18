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

        <div class="form_aluno_urlImagem">
            <label for="urlImagem">Foto de Perfil</label>
            <input type="file"
                   class="custom_input_direct"
                   id="urlImagem"
                   name="urlImagem"
                   autocomplete="urlImagem"
                   placeholder="Insira a imagem do aluno"
                   value=""
                   aria-describedby="nameHelp">
        </div>


        <div class="form_aluno_nome">
            <label for="email">Email</label>
            <input type="text"
                   class="custom_input_direct"
                   name="email"
                   autocomplete="email"
                   placeholder="Nome do Aluno"
                   value="{{$user->email}}"
                   required
                   aria-describedby="nameHelp">
        </div>

    </div>




    <div class="form_bundle form_bundle_3">

        <div class="form_aluno_nome">
            <label for="current_password">Atual Password</label>
            <input type="password"
                   class="custom_input_direct"
                   name="current_password"
                   autocomplete="current_password"
                   placeholder="Password atual do Professor"
                   value=""
                   aria-describedby="nameHelp">
        </div>

        <div class="form_aluno_nome">
            <label for="new_password">Nova Password</label>
            <input type="new_password"
                   class="custom_input_direct"
                   name="new_password"
                   autocomplete="new_password"
                   placeholder="Nova password do Professor"
                   value=""
                   aria-describedby="nameHelp">
        </div>

        <div class="form_aluno_nome">
            <label for="nome">Nova Password</label>
            <input type="password"
                   id="new_password"
                   class="custom_input_direct"
                   name="new_password"
                   autocomplete="new_password"
                   placeholder="Nova password do Professor"
                   value=""
                   aria-describedby="nameHelp">
        </div>
    </div>


    <div class="form_bundle form_bundle_2">
        <div>
            <label for="permissionEmail">Autorizo a divulgação do meu Email</label>
            <div>
                <div>
                    <input  type="radio" name="permissionEmail" value="1" @if($user->permissionEmail == 1) checked @endif>
                    <label class="label_radio" for="permissionEmail">Sim</label>
                </div>
                <div>
                    <input id="permissionAddress_check0" type="radio" name="permissionEmail" value="0" @if($user->permissionEmail == 0) checked @endif>
                    <label class="label_radio" for="permissionEmail">Não</label>
                </div>
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
