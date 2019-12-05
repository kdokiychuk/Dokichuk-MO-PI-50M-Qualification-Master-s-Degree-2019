@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису <a href="{{ url('admin/users/create') }}" class="btn btn-success">Створити USER</a><a href="{{url('admin/tovar/create')}}" class="btn btn-info">Створити Посилку</a></h1>
    <h2>
        <form class="form-horizontal" action="{{  url('admin/users/view') }}" method="post" style="margin-bottom: 5px">
            {{csrf_field()}}
            <input type="search" class="form-control" name="searcFile" id="searcFile" placeholder="Телефон Користувача">
            <button type="submit" class="btn btn-info" style="width: 100%">Пошук</button>
        </form>
        <a href="{{  url('admin/users/view') }}" style="margin-bottom: 50px; display: block" class="btn btn-warning">Переглянути всіх Користувачів</a>
    </h2>
    <table class="table table-striped tableView">
        <thead>
        <th>id_users</th>
        <th>name_users</th>
        <th>surname_users</th>
        <th>phone_users</th>
        <th>address_users</th>
        <th>email</th>
        <th>password</th>
        <th></th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td>ID = <?= $role->id_users?></td>
                <td><a href="<?= $role->id_users?>" class="btn btn-primary">NAME = <?= $role->name_users ?></a></td>
                <td><?= $role->surname_users ?></td>
                <td><?= $role->phone_users ?></td>
                <td><?= $role->address_users ?></td>
                <td><?= $role->email ?></td>
                <td>password</td>
                <td>
                    <form action="{{url('admin/users/view/'.$role->id_users) }}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button class="btn btn-danger">Видалити</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
    @if( $coutFroPag  > 1)
    {{$masRoleWorker->links()}}
    @endif
@endsection