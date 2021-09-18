<div id="evento" class="component">
    <div class="setaNoTitulo">
        <h4 class="event_title">Eventos</h4>
        <a
            @if(Auth()->user()->student)
                href="{{ url('group/'.Auth()->user()->student->group->id.'/events') }}"
            @elseif(Auth()->user()->professor)
                href="{{ url('group/'.Auth()->user()->professor->last_group.'/events') }}"
            @endif
        >
            <img src={{asset('fixed/icons/arrowLeft.png')}} class="backArrow">
        </a>
    </div>

    <div class="individualEvent">
        <h4>
            @if($event->category==0)
                Galeria
            @elseif($event->category==1)
                Visita de Estudo
            @else
                Palestra
            @endif
            - {{$event->name}}</h4>
        <h4>{{$event->description}}</h4>
    </div>
</div>
