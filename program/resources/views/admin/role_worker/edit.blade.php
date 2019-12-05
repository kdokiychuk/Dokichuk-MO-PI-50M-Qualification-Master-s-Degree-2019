@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_role_worker ?></h1>
    <h2 style="margin-bottom: 50px">Стара назва = <?= $masRoleWorkerOne->name_role_worker ?></h2>

    <form action="{{ url('admin/role_worker', $masRoleWorkerOne->id_role_worker) }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <label for="name_role_worker" class="col-md-4 control-label">Нова назва</label>
        <input placeholder="Нова назва" id="name_role_worker" type="text" class="form-control" name="name_role_worker" value="{{ old('name_role_worker') }}" required autofocus>
        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('admin/role_worker/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>



@endsection