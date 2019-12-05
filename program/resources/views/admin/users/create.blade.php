@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('admin/users/create') }}">
        {{csrf_field()}}
        <table class="table table-striped tableView">
            <thead>
            <th>ID</th>
            <th>name_users</th>
            <th>surname_users</th>
            <th>phone_users</th>
            <th>address_users</th>
            <th></th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerLast->id_users +1}}
                </td>
                <td>
                    <input id="name_users" type="text" class="form-control" name="name_users" value="{{ old('name_users') }}" required>
                </td>
                <td>
                    <input id="surname_users" type="text" class="form-control" name="surname_users" value="{{ old('surname_users') }}" required>
                </td>
                <td>
                    <input id="phone_users" type="tel" class="form-control" name="phone_users" value="{{ old('phone_users') }}" required>
                </td>
                <td>
                    <input id="address_users" type="text" class="form-control" name="address_users" value="{{ old('address_users') }}" required>
                </td>
                <td>
                    <input id="email" type="text" class="form-control hidden" name="email" value="null" >
                </td>
                <td>
                    <input id="password" type="text" class="form-control hidden" name="password" value="null" >
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ url('admin/users/view') }}" class="btn btn-primary">НАЗАД</a>
@endsection