@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису <a href="{{ url('admin/worker/create') }}" class="btn btn-success">Створити WORKER</a></h1>
    <form class="form-horizontal" action="{{  url('admin/worker/view') }}" method="post" style="margin-bottom: 5px">
        {{csrf_field()}}
        <input type="search" class="form-control" name="searcFile" id="searcFile" placeholder="Введіть номер паспорту">
        <button type="submit" class="btn btn-info" style="width: 100%">Пошук</button>
    </form>
    <a href="{{  url('admin/worker/view') }}" style="margin-bottom: 50px; display: block" class="btn btn-warning">Переглянути всіх Працівників</a>
    <table class="table table-striped tableView">
        <thead>
        <th>ID</th>
        <th>id_users</th>
        <th>pasport_worker</th>
        <th>id_viddilennya</th>
        <th>id_role_worker</th>
        <th></th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td>ID = <?= $role->id_worker?></td>
                <td><a href="<?= $role->id_worker?>" class="btn btn-primary">Id USER = <?= $role->id_users ?></a></td>
                <td><?= $role->pasport_worker ?></td>
                <td><?= $role->id_viddilennya ?></td>
                <td><?= $role->id_role_worker ?></td>
                <td>
                    <form action="{{url('admin/worker/view/'.$role->id_worker) }}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button href="#" class="btn btn-danger">Видалити</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
    @if( $coutFroPag  > 1)
    {{$masRoleWorker->links()}}
    @endif
@endsection