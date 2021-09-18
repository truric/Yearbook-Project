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


    <div class="gerir">

        <div class="mini_menu_sub">
            <button class="btn" type="reset" onclick="window.location.href='/backOffice/event'">Inserir Evento</button>
        </div>

        <input type="text" class="inputSearch custom_input" id="searchEventos" placeholder="Procurar Eventos">
{{--        <div style="overflow-x: auto;" >--}}
        <div class="pre_table">
            <table id="table_eventos" class="table-users">
                <thead>
                <tr>
                    {{--                        <th>ID</th>--}}
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Turmas</th>

                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
{{--                {{$event->groups->name}}--}}
                    <tr>
                        {{--                        <td>{{$event->id}}</td>--}}
                        <td>{{$event->name}}</td>
                        <td>
                            @if($event->description)
                                {{$event->description}}
                            @else
                                'sem descrição'
                            @endif
                        </td>
                        <td>
                            @if($event->category == 0)
                                Evento de Turma
                            @elseif($event->category == 1)
                                Visita de Estudo
                            @elseif($event->category == 2)
                                Palestra
                            @endif
                        </td>
                        <td>
                            @foreach($event->groups as $group)
                                {{$group->name}}
                                <br>
                            @endforeach
                        </td>
                        <td>
                            <div class="links_crud">
                                @if($event->category == 0)
                                    Este evento não pode ser apagado nem alterado
                                @else

                                    <form method="Get" action="{{url('backOffice/event/'.$event->id.'/edit')}}">
                                        <button class="btn" type="submit" >Editar</button>
                                    </form>

                                    <form method="POST" action="{{url('backOffice/event/'.$event->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn" type="submit">Eliminar</button>
                                    </form>
                                @endif
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $events->withQueryString()->links() }}

        </div>

    </div>
    </section>

    <script src={{asset('js/backOffice/backOffice_logic_event_index.js')}}></script>

@endsection

