@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису <a href="{{ url('admin/status_tovar/create') }}" class="btn btn-success">Створити status TOVAR</a></h1>
    <table class="table table-striped tableView">
        <thead>
        <th>ID</th>
        <th>NAME</th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td>ID = <?= $role->id_status_tovara?></td>
                <td><a href="<?= $role->id_status_tovara?>" class="btn btn-primary">NAME = <?= $role->name_status_tovara ?></a></td>
                <td>
                    <form action="{{url('admin/status_tovar/view/'.$role->id_status_tovara) }}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button href="#" class="btn btn-danger">Видалити</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
@endsection