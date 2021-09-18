<div class="pagina_pessoal_me">
    <img src="{{asset($user->url)}}">
</div>

<div class="component">
    <div class="relative flex flex-col break-words bg-white shadow-xl rounded-lg ">
        <div class="px-6">
            <div class="text-center ">
                <h3 class="text-3xl font-semibold leading-normal mb-2 text-gray-800 mb-2 mt-10">
                    {{$user->simpleName}}
                </h3>
                <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold mb-10">
                    <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                    {{$user->fullName}}
                </div>

                @if($user->permissionEmail > 0 && $user->email != null)
                    <div class="mb-2 text-gray-700">
                        {{--                            <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i>--}}
                        <strong>Email - </strong>{{$user->email}}
                    </div>
                @endif

                @if($user->student != null)
                    @if($user->student->permissionAddress > 0 && $user->student->parish != null)
                        <div class="mb-2 text-gray-700">
{{--                            <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i>--}}
                            <strong>Morada - </strong>{{$user->student->parish->name}}
                        </div>
                    @endif
                    @if($user->student->permissionPhone == 1 && $user->student->phone != null)
                        <div class="mb-2 text-gray-700">
{{--                                <i class="fas fa-university mr-2 text-lg text-gray-500"></i>--}}
                            <strong>Telefone - </strong>{{$user->student->phone}}
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
