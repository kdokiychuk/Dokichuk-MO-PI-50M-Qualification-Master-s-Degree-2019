@extends('layout.layoutUser')
@section('contentPage')
    <div class="viddilenyaPage">
        <h1>Відділення компанії - {{$coutFroPag}}</h1>
        <div id="map"></div>
        <h2  style="margin-top: 50px">
            <form class="form-horizontal" action="{{  url('viddilenyaPage') }}" method="post" style="margin-bottom: 0px;">
                {{csrf_field()}}
                <input type="search" class="form-control" name="searcFile" id="searcFile" placeholder="Введіть назву відділення">
                <button type="submit" class="btn btn-info" style="width: 100%">Пошук</button>
            </form>
            <a href="{{  url('viddilenyaPage') }}" style="margin-bottom: 50px; display: block" class="btn btn-warning">Переглянути всі Відділення</a>
        </h2>
        <table class="tableVidPage table table-striped tableView">
            <thead>
            <th>Назва Відділення</th>
            <th>Адресса Віділення</th>
            <th>Місто розташування Віділення</th>
            <th>Час роботи Віділення</th>
            </thead>
            @foreach ($masRoleWorker as $role)
                <tr>
                    <td><?= $role->name_viddilenya ?></td>
                    <td><?= $role->address_viddilenya ?></td>
                    <td><?= $role->city_viddilenya ?></td>
                    <td><?= $role->chas_robotu_viddilenya ?></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection