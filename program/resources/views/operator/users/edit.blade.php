@extends('layout.layoutOperator')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_users ?></h1>
    <h2 style="margin-bottom: 50px"><?= $masRoleWorkerOne->	name_users ?></h2>

    <form action="{{ url('operator/users', $masRoleWorkerOne->id_users) }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <div class="">
            <label for="name_users" class="col-md-4 control-label">Имя</label>
            <input placeholder="Нова назва" id="name_users" type="text" class="form-control" name="name_users" value="{{ $masRoleWorkerOne->name_users }}" autofocus>
        </div>
        <div class="">
            <label for="surname_users" class="col-md-4 control-label">Фамілія</label>
            <input placeholder="Нова назва" id="surname_users" type="text" class="form-control" name="surname_users" value="{{ $masRoleWorkerOne->surname_users }}">
        </div>
        <div class="">
            <label for="phone_users" class="col-md-4 control-label">Телефон</label>
            <input placeholder="Нова назва" id="phone_users" type="tel" class="form-control" name="phone_users" value="{{ $masRoleWorkerOne->phone_users }}">
        </div>
        <div class="">
            <label for="address_users" class="col-md-4 control-label">Адреса</label>
            <input placeholder="Нова назва" id="address_users" type="text" class="form-control" name="address_users" value="{{ $masRoleWorkerOne->address_users }}">
        </div>
        <div class="">
            <label for="email" class="col-md-4 control-label">email</label>
            <input placeholder="Нова назва" id="email" type="email" class="form-control" name="email" value="{{ $masRoleWorkerOne->email }}">
        </div>
        <div class="">
            <label for="password" class="col-md-4 control-label">Пароль</label>
            <input placeholder="Нова назва" id="password" type="text" class="form-control" name="password" value="{{ $masRoleWorkerOne->password }}">
        </div>

        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('operator/users/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>
@endsection