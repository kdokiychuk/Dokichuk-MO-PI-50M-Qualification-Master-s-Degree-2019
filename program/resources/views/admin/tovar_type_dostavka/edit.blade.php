@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_type_dostavka ?></h1>
    <h2 style="margin-bottom: 50px">Стара назва = <?= $masRoleWorkerOne->name_type_dostavka ?></h2>

    <form action="{{ url('admin/tovar_type_dostavka', $masRoleWorkerOne->id_type_dostavka) }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <label for="name_type_dostavka" class="col-md-4 control-label">Нова назва</label>
        <input placeholder="Нова назва" id="name_type_dostavka" type="text" class="form-control" name="name_type_dostavka" value="{{ old('name_type_dostavka') }}" required autofocus>
        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('admin/tovar_type_dostavka/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>



@endsection