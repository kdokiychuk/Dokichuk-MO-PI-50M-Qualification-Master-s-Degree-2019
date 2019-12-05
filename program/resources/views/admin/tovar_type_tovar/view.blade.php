@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису <a href="{{ url('admin/tovar_type_tovar/create') }}" class="btn btn-success">Створити TOVAR TYPE TOVAR</a></h1>
    <table class="table table-striped tableView">
        <thead>
        <th>ID</th>
        <th>NAME</th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td>ID = <?= $role->id_type_tovar?></td>
                <td><a href="<?= $role->id_type_tovar?>" class="btn btn-primary">NAME = <?= $role->name_type_tovar ?></a></td>
                <td>
                    <form action="{{url('admin/tovar_type_tovar/view/'.$role->id_type_tovar) }}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button href="#" class="btn btn-danger">Видалити</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
@endsection