<div id="turmaTitulo" class="component">
    <div>
        <h2>{{$group->name}}</h2>

        @if($group->slogan)
            <div id="turmaTitulo_subTitulo">
                <h4 class="">{{$group->slogan}}</h4>
        @endif


        @classDelegate
            @if($group->slogan == null)
                <div id="turmaTitulo_subTitulo">
                    <h4 class="opacity40">Insira o Slogan da sua Turma</h4>
            @endif
        @endclassDelegate

        @classDelegate
                @if($group->slogan == null)
                    <img id="btnChangrSlogan" src="{{asset('fixed/icons/plusWhite.png')}}" class="addBtn">
                @else()
                    <img id="btnChangrSlogan" src="{{asset('fixed/icons/plusWhite.png')}}" class="addBtn exists">
                @endif
        @endclassDelegate
            </div>
    </div>

    @classDelegate
        <div class="modal-slogan fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300 z-20">
            <!-- Modal content -->
            <div class="bg-white h-1/2 p-12">
                <!--Close modal button-->
                <button id="closebutton_slogan" type="button" class="focus:outline-none">
                    <!-- Hero icon - close button -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>

                <form class="mini_form" method="POST" action="{{ url('/group/'.$group->id.'/slogan') }}">
                @csrf
                @method('PUT')
                    <input
                    type="text"
                    class="custom_input_direct py-2"
                    id="slogan"
                    name="slogan"
                    placeholder="  Muda o slogan da Turma "
                    @if($group->slogan == null)
                        value=""
                    @else
                        value="{{$group->slogan}}"
                    @endif
                    aria-describedby="nameHelp">
                    <button class='w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-2 py-2 my-2'>Submeter</button>
                </form>
            </div>
        </div>
    @endclassDelegate
    </div>
</div>
