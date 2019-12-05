@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>admin MAIN PAGE</h1>
    <div style="text-align: center;">
    <p><a href="{{ url('admin/role_worker/view') }}" class="btn btn-success">Записи role <b>WORKER</b></a></p>
    <p><a href="{{ url('admin/status_tovar/view') }}" class="btn btn-success">Записи status <b>TOVAR</b></a></p>
    <p><a href="{{ url('admin/tovar_type_dostavka/view') }}" class="btn btn-success">Записи type <b>DOSTAVKA</b></a></p>
    <p><a href="{{ url('admin/tovar_type_oplata/view') }}" class="btn btn-success">Записи type<b> OPLATA</b></a></p>
    <p><a href="{{ url('admin/tovar_type_tovar/view') }}" class="btn btn-success">Записи type<b> TOVAR</b></a></p>
    <p><a href="{{ url('admin/viddilenya/view') }}" class="btn btn-success">Записи <b> VIDILENNYA</b></a></p>
    <p><a href="{{ url('admin/news/view') }}" class="btn btn-success">Записи <b> NEWS</b></a></p>
    <p><a href="{{ url('admin/worker/view') }}" class="btn btn-success">Записи <b> WORKER</b></a></p>
    <p><a href="{{ url('admin/tovar/view') }}" class="btn btn-success">Записи <b> TOVAR</b></a></p>
    <p><a href="{{ url('admin/users/view') }}" class="btn btn-success">Записи <b> USERS</b></a></p>
    </div>
@endsection