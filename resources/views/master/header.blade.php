<header id="menu-mobile">

    <div class="main-mobile">
        <img class="header_atec_logo" src={{asset('fixed/images/AtecLogoComp.png')}}>
        <img id="menu-btn" src='{{asset('fixed/icons/Menu.png')}}' style="height:20px">
    </div>
    <ul id="menu-options-mobile" class="hidden">
        <hr></hr>
        <li><a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group) }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id) }}"
                @endif
            >Turma</a></li>
        <li><a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group.'/gallery') }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id.'/gallery') }}"
                @endif
            >Galeria</a></li>
        <li><a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group.'/events') }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id.'/events') }}"
                @endif

            >Eventos</a></li>
        <li><a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group.'/atec') }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id.'/atec') }}"
                @endif

            >Sobre a ATEC</a></li>
        <li>
{{--            <a href="{{ url('user/'.Auth::user()->id) }}">{{ Auth::user()->simpleName }}</a>--}}
            <a href="{{ url('user/'.Auth::user()->id) }}">
                @if(Auth::user()->student == null || (Auth::user()->student != null && Auth::user()->student->nickname == null))
                    {{ Auth::user()->simpleName }}
                @else
                    {{ Auth::user()->student->nickname }}
                @endif
            </a>

            <a href="{{ url('user/'.Auth::user()->id.'/edit') }}">Editar Perfil</a>
            @professor
            <a href="{{ url('backOffice') }}">BackOffice</a>
            @endprofessor
            <a href="{{ url('logout') }}">Log Out</a>
        </li>
    </ul>

</header>

<header id="menu-desktop">

    <div id="menu-desktop-main">
        <ul id="menu-options-desktop">
            <a
{{--                @if(Auth::user()->professor != null)--}}
{{--                href="{{ url('group/'.Auth::user()->professor->last_group) }}"--}}
{{--               @else()--}}
{{--                href="{{ url('group/'.Auth::user()->student->group_id) }}"--}}
{{--                @endif--}}
            ><img class="header_atec_logo" src={{asset('fixed/images/AtecLogoComp.png')}}></a>


            <a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group) }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id) }}"
                @endif
            >Turma</a>


            <a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group.'/gallery') }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id.'/gallery') }}"
                @endif
            >Galeria</a>


            <a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group.'/events') }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id.'/events') }}"
                @endif

            >Eventos</a>


            <a @if(Auth::user()->professor != null)
               href="{{ url('group/'.Auth::user()->professor->last_group.'/atec') }}"
               @else()
               href="{{ url('group/'.Auth::user()->student->group_id.'/atec') }}"
                @endif

            >Sobre a ATEC</a>



            <a href="{{ url('user/'.Auth::user()->id) }}" id="header_pessoal">
                @if(Auth::user()->student == null || (Auth::user()->student != null && Auth::user()->student->nickname == null))
                    {{ Auth::user()->simpleName }}
                @else
                    {{ Auth::user()->student->nickname }}
                @endif
            </a>
{{--            <a href="{{ url('user/'.Auth::user()->id) }}" id="header_pessoal">Meu Perfil</a>--}}

        </ul>
    </div>






    <div id="header_pessoal_frame_dropdown" class="">
        <a href="{{ url('user/'.Auth::user()->id.'/edit') }}">Editar Perfil</a>
        @professor
        <a href="{{ url('backOffice') }}">BackOffice</a>
        @endprofessor
        <a href="{{ url('logout') }}">Log Out</a>
    </div>

</header>
