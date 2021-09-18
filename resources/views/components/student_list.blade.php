<div id="apresentacaoAlunos" class="component">
    <h4 class="component_titulo"> A nossa turma</h4>

    <div class="apresentacaoLista">
        @foreach($students as $student)
        <div class="aluno_presentation_individual" ondblclick="window.location='{{ url('user/'.$student->user->id) }}'">
            <img src={{$student->user->url}}>
            <div class="aluno_presentation_individual_info">
                <h4>{{$student->user->simpleName}}</h4>
                @if($student->category == 1)
                <h4>Delegado</h4>
                @elseif($student->category == 2)
                    <h4>Sub-Delegado</h4>
                @endif

            </div>
        </div>
        @endforeach

    </div>
</div>
