@extends('layout.layoutCourier')
@section('contentPage')
    <h1>Кількість товарів = {{$allTovars}} <br>Натисність для редагування запису <a href="{{ url('courier/tovar/create') }}" class="btn btn-success">Створити TOVAR</a></h1>
    <h2>
        <form class="form-horizontal" action="{{  url('courier/tovar/view') }}" method="post" style="margin-bottom: 5px">
            {{csrf_field()}}
            <input type="search" class="form-control" name="searcFile" id="searcFile" placeholder="Введіть номер товару">
            <button type="submit" class="btn btn-info" style="width: 100%">Пошук</button>
        </form>
        <a href="{{  url('courier/tovar/view') }}" style="margin-bottom: 50px; display: block" class="btn btn-warning">Переглянути всі Товари</a>
    </h2>
    <table class="table table-striped tableView">
        <thead>
        <th>Номер товару</th>
        <th>Номер відділення </th>
        <th>Ід Відправника<br>Ід Отримувача</th>
        <th>Дата відправлення<br>Дата отримання</th>
        <th>Номер працівника</th>
        <th>Статус товару<br>Тип доставки</th>
        <th>Тип товара<Br>Тип оплати</th>
        <th>price</th>
        <th></th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td><a href="<?= $role->id_tovar?>" class="btn btn-primary">Id TOVAR = <?= $role->id_tovar ?></a><button  class="btn btn-primary marshRoot" >Построить маршурт</button></td>
                <td><span class="fromViddilenya"><?= $role->id_viddilenya ?></span><br><span class="toViddilenya"><?= $role->id_viddilenya_otrumuvach ?></span></td>
                <td><?= $role->id_vidpravlyvach ?><br><?= $role->id_otrumyvach ?></td>
                <td><?= $role->data_vidpravlennya ?><br><?= $role->data_otrumannya ?></td>
                <td><?= $role->id_worker ?></td>
                <td><?php if($role->id_status_tovara == 5){
                        echo "<span class='needRed'> $role->id_status_tovara </span>";
                    }else{
                        echo $role->id_status_tovara;
                    } ?><br><?= $role->id_type_dostavka ?></td>
                <td><?= $role->id_type_tovar ?><br><?= $role->id_type_oplata_tovar ?><br><span class="addressName"><?= $role->name_address ?></span></td>
                <td><?= $role->price ?></td>
                <td>
                    <form action="{{url('courier/tovar/view/'.$role->id_tovar) }}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button href="#" class="btn btn-danger">Видалити</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
    @if( $coutFroPag  > 1)
    {{$masRoleWorker->links()}}
    @endif
@endsection

<div class="blockMapMarsh">
    <button class="closeMarsh">X</button>
    <div class="contentMapMAsth">
        <div id="map2"></div>
    </div>
    <div id="warnings-panel" style="display: none;"></div>
</div>


<style>
    button.closeMarsh {
        background: none;
        border: none;
        position: absolute;
        top: 0;
        right: 0;
        font-size: 30px;
        z-index: 100;
    }
    .blockMapMarsh {
        position: fixed;
        width: 1000px;
        z-index: 1002;
        height: 500px;
        top: calc(50% - 250px);
        left: calc(50% - 300px);
        background-color: #fff;
        display: none;
    }
    #map2{
        height: 500px;
    }
    .marshRoot{
        background-color: purple !important;
        margin-top: 10px !important;
    }
</style>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script>
    var viddilenya1 = 'вулиця Крошенська, 20, Житомир, Житомирська область, 10001';
    var viddilenya2 = 'вулиця Каракульна, Житомир, Житомирська область';
    var viddilenya3 = 'проспект Миру, 8, Житомир, Житомирська область';
    var viddilenya4 = 'улица Гранитная, 16, Житомир, Житомирская область';
    var viddilenya5 = 'вулиця Леха Качинського, Житомир, Житомирська область';

    var needGo1 = 'вулиця Крошенська, 20';
    var needGo2 = 'вулиця Крошенська, 20';
    $(function() {
        var section = window.location.href;
        if (section.indexOf('dostavka') != -1) {


            // $('a.btn.btn-primary').each(function () {
            //    $(this).parents('td').append('<button class="btn btn-primary marshRoot" id="marshRoot">Построить маршурт</button>')
            // });

            $(document).on('click','.marshRoot',function () {


                $('.blockMapMarsh').fadeIn();
            });

            $(document).on('click','.closeMarsh',function () {
                $('.blockMapMarsh').fadeOut();
            })

        }
    });
</script>


<script>



    function initMap() {
        var markerArray = [];

        // Instantiate a directions service.
        var directionsService = new google.maps.DirectionsService;

        // Create a map and center it on Manhattan.
        var map = new google.maps.Map(document.getElementById('map2'), {
            zoom: 13,
            center: {lat: 50.25465, lng: 28.6586669}
        });

        // Create a renderer for directions and bind it to the map.
        var directionsRenderer = new google.maps.DirectionsRenderer({map: map});

        // Instantiate an info window to hold step text.
        var stepDisplay = new google.maps.InfoWindow;

        // Display the route between the initial start and end selections.
        calculateAndDisplayRoute(
            directionsRenderer, directionsService, markerArray, stepDisplay, map);
        // Listen to change events from the start and end lists.


        $('.marshRoot').click(function () {

            var address = $(this).parents('td').siblings('td').children('.addressName').text();
            var fromViddilenya = $(this).parents('td').siblings('td').children('.fromViddilenya').text();
            var toViddilenya = $(this).parents('td').siblings('td').children('.toViddilenya').text();


            if(fromViddilenya == 1)
                needGo1 = viddilenya1;
            if(fromViddilenya == 2)
                needGo1 = viddilenya2;
            if(fromViddilenya == 3)
                needGo1 = viddilenya3;
            if(fromViddilenya == 4)
                needGo1 = viddilenya4;
            if(fromViddilenya == 5)
                needGo1 = viddilenya5;

            if(address == ''){
                if(toViddilenya == 1)
                    needGo2 = viddilenya1;
                if(toViddilenya == 2)
                    needGo2 = viddilenya2;
                if(toViddilenya == 3)
                    needGo2 = viddilenya3;
                if(toViddilenya == 4)
                    needGo2 = viddilenya4;
                if(toViddilenya == 5)
                    needGo2 = viddilenya5;
            }else {
                needGo2 = address;
            }



                calculateAndDisplayRoute( directionsRenderer, directionsService, markerArray, stepDisplay, map);
                console.log('change')
        })

        // document.getElementById('marshRoot').addEventListener('click', onChangeHandler);
        // document.getElementById('start').addEventListener('change', onChangeHandler);
        // document.getElementById('end').addEventListener('change', onChangeHandler);
    }

    function calculateAndDisplayRoute(directionsRenderer, directionsService,
                                      markerArray, stepDisplay, map) {
        // First, remove any existing markers from the map.
        for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
        }

        // Retrieve the start and end locations and create a DirectionsRequest using
        // WALKING directions.
        console.log(needGo1)
        console.log(needGo2)
        directionsService.route({
            origin: needGo1,
            destination: needGo2,
            travelMode: 'DRIVING'
        }, function(response, status) {
            // Route the directions and pass the response to a function to create
            // markers for each step.
            if (status === 'OK') {
                document.getElementById('warnings-panel').innerHTML =
                    '<b>' + response.routes[0].warnings + '</b>';
                directionsRenderer.setDirections(response);
                showSteps(response, markerArray, stepDisplay, map);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }

    function showSteps(directionResult, markerArray, stepDisplay, map) {
        // For each step, place a marker, and add the text to the marker's infowindow.
        // Also attach the marker to an array so we can keep track of it and remove it
        // when calculating new routes.
        var myRoute = directionResult.routes[0].legs[0];
        for (var i = 0; i < myRoute.steps.length; i++) {
            var marker = markerArray[i] = markerArray[i] || new google.maps.Marker;
            marker.setMap(map);
            marker.setPosition(myRoute.steps[i].start_location);
            attachInstructionText(
                stepDisplay, marker, myRoute.steps[i].instructions, map);
        }
    }

    function attachInstructionText(stepDisplay, marker, text, map) {
        google.maps.event.addListener(marker, 'click', function() {
            // Open an info window when the marker is clicked on, containing the text
            // of the step.
            stepDisplay.setContent(text);
            stepDisplay.open(map, marker);
        });
    }
</script>

{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlzOwtxEtnIpwxGALvJFKBxaO74TBBoZM&callback=initMaps"> </script>--}}