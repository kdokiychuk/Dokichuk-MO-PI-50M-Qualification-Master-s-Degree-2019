@extends('layout.layoutOperator')
@section('contentPage')
    <h1>operator MAIN PAGE</h1>
    <div style="text-align: center;">
    <p><a href="{{ url('operator/tovar/view') }}" class="btn btn-success">Записи <b> TOVAR</b></a></p>
    <p><a href="{{ url('operator/users/view') }}" class="btn btn-success">Записи <b> USERS</b></a></p>
    </div>
@endsection