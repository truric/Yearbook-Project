<div class="component">
    <h4 class="event_title">Organograma</h4>

{{--    <form class="flex w-full max-w-sm space-x-3">--}}
{{--        <div class=" relative ">--}}
{{--            <input type="text" id="&quot;form-subscribe-Subscribe" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Email"/>--}}
{{--        </div>--}}
{{--        <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">--}}
{{--            Subscribe--}}
{{--        </button>--}}
{{--    </form>--}}


    <div class="organograma">
        <div class="organograma_tier">
            @if($areaCoordinator!=null)
{{--                <div>--}}
{{--                    <img  src="{{$areaCoordinator->user->url}}"  ondblclick="window.location='{{ url('user/'.$areaCoordinator->user->id) }}'">--}}
{{--                    <h4> Coordenador de Área</h4>--}}
{{--                    <h5> {{$areaCoordinator->user->simpleName}}</h5>--}}
{{--                </div>--}}

                <div>
                    <div class="text-center opacity-90">
                        <a href='{{ url('user/'.$areaCoordinator->user->id) }}' class="block relative">
                            <img src={{$areaCoordinator->user->url}} class="mx-auto object-cover rounded-full h-40 w-40">
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl text-gray-800 dark:text-white">
                            {{$areaCoordinator->user->simpleName}}
                        </p>
                        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">Coordenador de Área</p>
                    </div>
                </div>
            @endif

            @if($degreeCoordinator!=null)
{{--                <div>--}}
{{--                    <img  src="{{$degreeCoordinator->user->url}}"  ondblclick="window.location='{{ url('user/'.$degreeCoordinator->user->id) }}'">--}}
{{--                    <h4> Coordenador de Curso</h4>--}}
{{--                    <h5> {{$degreeCoordinator->user->simpleName}}</h5>--}}
{{--                </div>--}}
                <div >
                    <div class="text-center opacity-90">
                        <a href='{{ url('user/'.$degreeCoordinator->user->id) }}' class="block relative">
                            <img src="{{$degreeCoordinator->user->url}}" class="mx-auto object-cover rounded-full h-40 w-40">
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl text-gray-800 dark:text-white">
                            {{$degreeCoordinator->user->simpleName}}
                        </p>
                        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">Coordenador de Curso</p>
                    </div>
                </div>
            @endif

            @if($groupCoordinator!=null)
{{--                <div>--}}
{{--                    <img  src="{{$groupCoordinator->user->url}}"  ondblclick="window.location='{{ url('user/'.$groupCoordinator->user->id) }}'">--}}
{{--                    <h4> Coordenador de turma</h4>--}}
{{--                    <h5> {{$groupCoordinator->user->simpleName}}</h5>--}}
{{--                </div>--}}
                <div >
                    <div class="text-center opacity-90">
                        <a href='{{ url('user/'.$groupCoordinator->user->id) }}' class="block relative">
                            <img src="{{$groupCoordinator->user->url}}" class="mx-auto object-cover rounded-full h-40 w-40">
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl text-gray-800 dark:text-white">
                            {{$groupCoordinator->user->simpleName}}
                        </p>
                        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">Coordenador de Turma</p>
                    </div>
                </div>
            @endif

        </div>


        <div class="organograma_tier">
            @if($groupDelegate!=null)
{{--                <div>--}}
{{--                    <img  src="{{$groupDelegate->user->url}}" ondblclick="window.location='{{ url('user/'.$groupDelegate->user->id) }}'">--}}
{{--                    <h4> Delegado de turma</h4>--}}
{{--                    <h5> {{$groupDelegate->user->simpleName}}</h5>--}}
{{--                </div>--}}
                <div>
                    <div class="text-center opacity-90">
                        <a href='{{ url('user/'.$groupDelegate->user->id) }}' class="block relative">
                            <img src="{{$groupDelegate->user->url}}" class="mx-auto object-cover rounded-full h-40 w-40">
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl text-gray-800 dark:text-white">
                            {{$groupDelegate->user->simpleName}}
                        </p>
                        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">Delegado</p>
                    </div>
                </div>
            @endif


            @if($groupSubdelegate!=null)
{{--                <div>--}}
{{--                    <img  src="{{$groupSubdelegate->user->url}}" ondblclick="window.location='{{ url('user/'.$groupSubdelegate->user->id) }}'">--}}
{{--                    <h4> SubDelegado de turma</h4>--}}
{{--                    <h5> {{$groupSubdelegate->user->simpleName}}</h5>--}}
{{--                </div>--}}
                <div>
                    <div class="text-center opacity-90">
                        <a href='{{ url('user/'.$groupSubdelegate->user->id) }}' class="block relative">
                            <img src="{{$groupSubdelegate->user->url}}" class="mx-auto object-cover rounded-full h-40 w-40">
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl text-gray-800 dark:text-white">
                            {{$groupSubdelegate->user->simpleName}}
                        </p>
                        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">SubDelegado</p>
                    </div>
                </div>
            @endif


        </div>
    </div>
</div>
