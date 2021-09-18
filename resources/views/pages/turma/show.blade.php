@extends('master.main')

@section('map')
    @if(sizeof($arrayCoord) > 0)
        @component('components.map')
        @endcomponent
    @endif
@endsection

@section('content')


    @component('components.main_title',
                ['group' => $group, 'event' => $event]
                )
    @endcomponent

    @component('components.tags',
            ['title'=> '',
            'tags' => $students,
            'val' => "",
            'extra_info' => 1])
    @endcomponent




    @component('components.comments_event',
            ['comments' => $comments,
            'myComment'=>$myComment])
    @endcomponent


    @if( sizeof($professors) > 0)
        @component('components.tags',
                ['title'=> 'Os nossos Professores',
                'tags' => $professors,
                'val' => "",
                'extra_info' => 0])
        @endcomponent
    @endif

@endsection



@section('logic')

    @classDelegate
    <script src="{{ asset('js/master/main_title.js') }}"></script>
    @endclassDelegate
{{--    <script src="{{ asset('js/master/student_list.js') }}"></script>--}}
    <script src="{{ asset('js/master/comments_events.js') }}"></script>

    @if(sizeof($arrayCoord) > 0)
        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz9Ng4b60nePXEiFywJ9Zgc2Sm5AfmLtM&callback=initMap&libraries=&v=weekly"
        async></script>
    @endif

@endsection


@section('style')

    @if(sizeof($arrayCoord) > 0)
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

        <script>
            let studentCoordinates = @json($arrayCoord);

            let city = [];
            city[0] = 'Atec';
            city[1] = '/fixed/images/AtecLogoSoloBackground.png'
            if((@json($groupCity)[0]) == 'P'){
                city[2]=41.22063684945501;
                city[3]=-8.686457291495511;
            }
            else{
                city[2]=38.58076482084942;
                city[3]=-9.004173730155282;
            }
            studentCoordinates.push(city);

            let map;

            function initMap() {
                let avglat = 0;
                let avglon = 0;
                studentCoordinates.forEach(cenas =>{
                    avglat = parseFloat(avglat) + parseFloat(cenas[2]);
                    avglon = parseFloat(avglon) + parseFloat(cenas[3]);
                })
                avglat= avglat / studentCoordinates.length
                avglon= avglon / studentCoordinates.length



                map = new google.maps.Map(document.getElementById("map"), {
                    center: { lat: avglat, lng: avglon },
                    zoom: 9,
                });

                function addMarker(props) {
                    var marker = new google.maps.Marker({
                        position: props.coords,
                        map: map,
                        title: props.title,
                        icon: props.icon
                    });
                }

                let LatLngList = new Array();
                studentCoordinates.forEach(cenas =>{

                    var icon = {
                        url: cenas[1], // url
                        scaledSize: new google.maps.Size(50, 50), // scaled size
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    };

                    addMarker({
                        coords: { lat: parseFloat(cenas[2]), lng:  parseFloat(cenas[3]) },
                        title: cenas[0],
                        icon: icon
                    });

                    LatLngList.push(new google.maps.LatLng (parseFloat(cenas[2]), parseFloat(cenas[3])));

                })

                var bounds = new google.maps.LatLngBounds ();

                for (var i = 0, LtLgLen = LatLngList.length; i < LtLgLen; i++) {
                    bounds.extend (LatLngList[i]);
                }
                map.fitBounds (bounds);
            }

        </script>

    @endif

@endsection
