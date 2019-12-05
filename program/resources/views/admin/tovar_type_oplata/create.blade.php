@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('admin/tovar_type_oplata/create') }}">
        {{csrf_field()}}
        <table class="table table-striped tableView">
            <thead>
            <th>ID</th>
            <th>NAME</th>
            <th></th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerLast->id_type_oplata_tovar +1}}
                </td>
                <td>
                    <input id="name_type_oplata_tovar" type="text" class="form-control" name="name_type_oplata_tovar" value="{{ old('name_type_oplata_tovar') }}" required>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ url('admin/tovar_type_oplata/view') }}" class="btn btn-primary">НАЗАД</a>
@endsection