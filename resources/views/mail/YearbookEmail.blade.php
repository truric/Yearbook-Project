{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>--}}
{{--    <title>Mail System</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--@yield('content')--}}
{{--<br />--}}
{{--<div class="container box">--}}

{{--    @if(count($errors) > 0)--}}
{{--        <div class="alert alert-danger">--}}
{{--            <button type="button" class="close" data-dismiss="alert">x</button>--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    @if($message = Session::get('success'))--}}
{{--                <div class="alert alert-success alert-block">--}}
{{--                    <button type="button" class="close" data-dismiss="alert">x</button>--}}
{{--                    <strong> {{ $message }} </strong>--}}
{{--                </div>--}}
{{--        <script>--}}
{{--            swal("E-mail sent","E-mail sent successfully","success",{--}}
{{--                button:"OK",--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endif--}}

{{--    <form method="POST" action="{{ url('backOffice/sendemail/send') }} ">--}}
{{--        {{ csrf_field() }}--}}
{{--        <div class="form-group">--}}
{{--            <label>Insira o seu nome</label>--}}
{{--            <input type="text" name="name" class="form-control" />--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label>Insira o destinatário</label>--}}
{{--            <input type="text" name="email[]" class="form-control" />--}}
{{--        </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="email[]" class="form-control" />--}}
{{--                </div>--}}
{{--        <div class="form-group">--}}
{{--            <label>Mensagem</label>--}}
{{--            <textarea type="text" name="message" class="form-control"></textarea>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="submit" name="send" value="Send" class="btn btn-info"/>--}}
{{--        </div>--}}


{{--    </form>--}}
{{--</div>--}}
{{--@yield('scripts')--}}

{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js" integrity="sha512-CrNI25BFwyQ47q3MiZbfATg0ZoG6zuNh2ANn/WjyqvN4ShWfwPeoCOi9pjmX4DoNioMQ5gPcphKKF+oVz3UjRw==" crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}



@extends('backOffice.main')


@section('content')

    <section>

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

{{--            @if($message = Session::get('success'))--}}
{{--                <div class="alert alert-success alert-block">--}}
{{--                    <button type="button" class="close" data-dismiss="alert">x</button>--}}
{{--                    <strong> {{ $message }} </strong>--}}
{{--                </div>--}}
{{--                <script>--}}
{{--                    swal("E-mail sent","E-mail sent successfully","success",{--}}
{{--                        button:"OK",--}}
{{--                    });--}}
{{--                </script>--}}
{{--            @endif--}}


        <form method="POST" action="{{ url('backOffice/sendemail/send') }} ">
            @csrf
            <label>Destinatários</label>


            <div class="turma_professores">

                <div class="coluna_procurar_professores">
                    <input type="text" class="inputSearch custom_input" id="searchEvento" placeholder="Procurar utilizadores">
                    <select class="custom_select coluna_procurar_events_select" name="input[]" multiple size="30">
                            <option disabled>Lista de Alunos</option>
                        @foreach($students as $student)
                            <option value="{{$student->user->email}}">@if($student->group != null){{$student->group->name}} - @endif{{$student->user->simpleName}}</option>
                        @endforeach
                            <option disabled>Lista de Professores</option>
                        @foreach($professors as $professor)
                            <option value="{{$professor->user->email}}">Professor: {{$professor->user->simpleName}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="setas">
                    <a class="right_arrow_eventos">
                        <img src={{asset('fixed/icons/big-right-arrow.png')}}>
                    </a>
                    <a class="left_arrow_eventos">
                        <img src={{asset('fixed/icons/big-left-arrow.png')}}>
                    </a>
                </div>

                <div class="coluna_selecionar_professores">
                    <input type="text" class="inputSearch custom_input" placeholder="Procurar utilizadores">
                    <select class="custom_select coluna_selecionar_events_select" name="recipients[]" multiple size="30">

                    </select>
                </div>
            </div>


            <div class="email_campos">
                <label for="name">Insira o seu nome</label>
                <input type="text"
                       class="custom_input_direct"
                       name="emailName"
                       autocomplete="name"
                       placeholder="Insira o seu nome"
                       value=""
                       required
                       style="margin-bottom: 0px"
                       aria-describedby="nameHelp">
            </div>

            <div class="email_campos">
                <label for="description">Email</label>
                <textarea
                    name="emailText"
                    autocomplete="description"
                    placeholder="Email"
                    class="custom_input_direct textarea_input"
                    aria-describedby="nameHelp"
                    required></textarea>
            </div>


            <button class="btn" type="submit">Enviar Email</button>
        </form>
    </section>


    <script src={{asset('js/backOffice/backOffice_logic_email.js')}}></script>
@endsection







{{--            <div class="email_destinatario email_campos" >--}}



{{--                <div class="" style="width: 390px">--}}
{{--                    <div class ="form_email group_filter1">--}}
{{--                        <div>--}}
{{--                            <input id="email_filter1_area" type="radio" class="email_filter1" name="email_filter1" value="1" required>--}}
{{--                            <label for="email_filter1">Escolha uma Área</label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input id="email_filter1_degree" type="radio" class="email_filter1" name="email_filter1" value="2" required>--}}
{{--                            <label for="email_filter1">Escolha um Curso</label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input id="email_filter1_group" type="radio" class="email_filter1" name="email_filter1" value="3" required>--}}
{{--                            <label for="email_filter1">Escolha uma turma</label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input id="email_filter2" type="radio" name="email_filter2" value="0">--}}
{{--                            <label for="email_filter2">Personalizado</label>--}}
{{--                        </div>--}}
{{--                        <select id="email_filter1_general" required class="custom_select_direct hidden" name="selectedMainGroup" --}}{{--style="max-width: 390px; margin-top: 5px; margin-bottom: 5px"--}}{{-->--}}
{{--                            <option value="" id="default_option" tier1="0" disabled selected>Selecione um grupo</option>--}}
{{--                            @foreach($areas as $area)--}}
{{--                                <option maingroup="area" value="{{$area->id}}">{{$area->name}}</option>--}}
{{--                            @endforeach--}}
{{--                            @foreach($degrees as $degree)--}}
{{--                                <option maingroup="degree" value="{{$degree->id}}">{{$degree->name}}</option>--}}
{{--                            @endforeach--}}
{{--                            @foreach($groups as $group)--}}
{{--                                <option maingroup="group" value="{{$group->id}}">{{$group->name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}

{{--                        <div class="form_evento_nome">--}}
{{--                            <input id="email_filter1_user" type="radio" class="email_filter1" name="email_filter1" value="4">--}}
{{--                            <label for="email_user">Utilizador especifico</label>--}}
{{--                            <input type="text"--}}
{{--                                   id="name"--}}
{{--                                   id="email_filter1_user_input"--}}
{{--                                   class="custom_input_direct hidden"--}}
{{--                                   name="singleUserEmail"--}}
{{--                                   autocomplete="name"--}}
{{--                                   placeholder="Email do utilizador"--}}
{{--                                   --}}{{--style="max-width: 390px; margin-top: 5px; margin-bottom: 5px"--}}
{{--                                   value=""--}}
{{--                                   aria-describedby="nameHelp">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}










{{--                <div class="">--}}
{{--                    <div id="group_filter2" class="form_email disabled">--}}
{{--                        <div>--}}
{{--                            <input type="radio" name="email_filter2" class="email_filter2" value="1">--}}
{{--                            <label for="email_filter2">Utilizadores do grupo selecionado</label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input type="radio" name="email_filter2" class="email_filter2" value="2">--}}
{{--                            <label for="email_filter2">Professores do grupo selecionado</label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input type="radio" name="email_filter2" class="email_filter2" value="3">--}}
{{--                            <label for="email_filter2">Alunos do grupo selecionado</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}



