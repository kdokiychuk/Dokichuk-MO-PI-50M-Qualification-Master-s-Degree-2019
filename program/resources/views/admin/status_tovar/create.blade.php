@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('admin/status_tovar/create') }}">
        {{csrf_field()}}
        <table class="table table-striped tableView">
            <thead>
            <th>ID</th>
            <th>NAME</th>
            <th></th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerLast->id_status_tovara +1}}
                </td>
                <td>
                    <input id="name_status_tovara" type="text" class="form-control" name="name_status_tovara" value="{{ old('name_status_tovara') }}" required>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ url('admin/status_tovar/view') }}" class="btn btn-primary">НАЗАД</a>
@endsection