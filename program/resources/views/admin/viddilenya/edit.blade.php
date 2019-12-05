@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_viddilenya ?></h1>
    <h2 style="margin-bottom: 50px"><?= $masRoleWorkerOne->	name_viddilenya ?></h2>

    <form action="{{ url('admin/viddilenya', $masRoleWorkerOne->id_viddilenya) }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <div class="">
            <label for="name_viddilenya" class="col-md-4 control-label">Нзва</label>
            <input placeholder="Нова назва" id="name_viddilenya" type="text" class="form-control" name="name_viddilenya" value="{{ $masRoleWorkerOne->name_viddilenya }}" autofocus>
        </div>
        <div class="">
            <label for="address_viddilenya" class="col-md-4 control-label">Адреса</label>
            <input placeholder="Нова назва" id="address_viddilenya" type="text" class="form-control" name="address_viddilenya" value="{{ $masRoleWorkerOne->address_viddilenya }}">
        </div>
        <div class="">
            <label for="city_viddilenya" class="col-md-4 control-label">Місто</label>
            <input placeholder="Нова назва" id="city_viddilenya" type="text" class="form-control" name="city_viddilenya" value="{{ $masRoleWorkerOne->city_viddilenya }}">
        </div>
        <div class="">
            <label for="chas_robotu_viddilenya" class="col-md-4 control-label">Час роботи</label>
            <input placeholder="Нова назва" id="chas_robotu_viddilenya" type="text" class="form-control" name="chas_robotu_viddilenya" value="{{ $masRoleWorkerOne->chas_robotu_viddilenya }}">
        </div>

        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('admin/viddilenya/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>
@endsection