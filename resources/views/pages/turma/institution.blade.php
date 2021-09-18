@extends('master.main')

@section('content')

    @component('components.institution_intro',
                ['group' => $group]
                )
    @endcomponent

    @component('components.organograma',
                [ 'areaCoordinator' => $areaCoordinator,
                'degreeCoordinator' => $degreeCoordinator,
                'groupCoordinator' => $groupCoordinator,
                'groupDelegate' => $groupDelegate,
                'groupSubdelegate' => $groupSubdelegate]
            )
    @endcomponent
@endsection
