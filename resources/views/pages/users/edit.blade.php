@extends('master.main')


@section('content')

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong> {{ $message }} </strong>
        </div>
{{--        <script>--}}
{{--            swal("E-mail sent","E-mail sent successfully","success",{--}}
{{--                button:"OK",--}}
{{--            });--}}
{{--        </script>--}}
    @endif

    <div class="pagina_pessoal">

        @student
{{--            <div style="margin-top: 65px; @media (min-width: 48em){margin-bottom: -85px;}">--}}
                @component('components.personal_student_edit',
                            ['user' => $user,
                            'districts' => $districts,
                            'counties' => $counties,
                            'parishes' => $parishes])
                @endcomponent
{{--            </div>--}}
        @endstudent

        @professor
{{--            <div style="margin-top: 65px;  @media (min-width: 48em){margin-bottom: -85px;}">--}}
                @component('components.personal_professor_edit',
                                ['user' => $user])
                @endcomponent
{{--            </div>--}}
        @endprofessor
    </div>

@endsection



@section('logic')

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz9Ng4b60nePXEiFywJ9Zgc2Sm5AfmLtM&libraries=&v=weekly"
        async></script>
    @student
        <script src="{{ asset('js/master/personal_student_edit.js') }}"></script>
    @endstudent

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js" integrity="sha512-CrNI25BFwyQ47q3MiZbfATg0ZoG6zuNh2ANn/WjyqvN4ShWfwPeoCOi9pjmX4DoNioMQ5gPcphKKF+oVz3UjRw==" crossorigin="anonymous"></script>


@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
@endsection
