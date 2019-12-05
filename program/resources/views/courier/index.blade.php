@extends('layout.layoutCourier')
@section('contentPage')
    <h1>courier MAIN PAGE</h1>
    <div style="text-align: center;">
    <p><a href="{{ url('courier/tovar/view') }}" class="btn btn-success">Записи <b> TOVAR</b></a></p>
        <p><a href="{{ url('courier/tovar/view') }}#dostavka" class="btn btn-success">Доставка <b> TOVAR</b></a></p>
    </div>
@endsection