@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('admin/role_worker/create') }}">
        {{csrf_field()}}
        <table class="table table-striped tableView">
            <thead>
            <th>ID</th>
            <th>NAME</th>
            <th></th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerLast->id_role_worker +1}}
                </td>
                <td>
                    <input id="name_role_worker" type="text" class="form-control" name="name_role_worker" value="{{ old('name_role_worker') }}" required>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ url('admin/role_worker/view') }}" class="btn btn-primary">НАЗАД</a>
@endsection