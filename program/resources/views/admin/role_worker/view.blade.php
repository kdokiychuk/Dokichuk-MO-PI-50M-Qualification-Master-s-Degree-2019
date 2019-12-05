@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису <a href="{{ url('admin/role_worker/create') }}" class="btn btn-success">Створити role WORKER</a></h1>
    <table class="table table-striped tableView">
        <thead>
            <th>ID</th>
            <th>NAME</th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td>ID = <?= $role->id_role_worker?></td>
                <td><a href="<?= $role->id_role_worker?>" class="btn btn-primary">NAME = <?= $role->name_role_worker ?></a></td>
                <td>
                    <form action="{{url('admin/role_worker/view/'.$role->id_role_worker) }}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button href="#" class="btn btn-danger">Видалити</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
@endsection