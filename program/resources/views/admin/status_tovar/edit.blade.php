@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_status_tovara ?></h1>
    <h2 style="margin-bottom: 50px">Стара назва = <?= $masRoleWorkerOne->name_status_tovara ?></h2>

    <form action="{{ url('admin/status_tovar', $masRoleWorkerOne->id_status_tovara) }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <label for="name_status_tovara" class="col-md-4 control-label">Нова назва</label>
        <input placeholder="Нова назва" id="name_status_tovara" type="text" class="form-control" name="name_status_tovara" value="{{ old('name_status_tovara') }}" required autofocus>
        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('admin/status_tovar/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>



@endsection