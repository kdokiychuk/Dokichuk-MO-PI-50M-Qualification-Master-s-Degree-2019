@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_worker ?></h1>
    <h2 style="margin-bottom: 50px">Pasport= <?= $masRoleWorkerOne->pasport_worker ?></h2>

    <form action="{{ url('admin/worker', $masRoleWorkerOne->id_worker) }}" method="post" class="form-horizontal">
        {{csrf_field()}}

        <table class="table table-striped tableView">
            <thead>
            <th>ID</th>
            <th>id_users</th>
            <th>pasport_worker</th>
            <th>id_viddilennya</th>
            <th>id_role_worker</th>
            <th></th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerOne->id_worker}}
                </td>
                <td>
                    <input placeholder="Введіть телефон" list="list_users" id="id_users" type="text" class="form-control" name="id_users" value="{{ $masRoleWorkerOne->id_users }}" required>
                    <datalist id="list_users">
                        @foreach($users as $user)
                            <option value="{{ $user->id_users }}">tel= {{$user->phone_users}} name= {{$user->name_users}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input id="pasport_worker" type="text" class="form-control" name="pasport_worker" value="{{ $masRoleWorkerOne->pasport_worker }}" required>
                </td>
                <td>
                    <input placeholder="Введіть назву відділення" list="list_vid" id="id_viddilennya" type="text" class="form-control" name="id_viddilennya" value="{{ $masRoleWorkerOne->id_viddilennya }}" required>
                    <datalist id="list_vid">
                        @foreach($viddilennya as $vid)
                            <option value="{{ $vid->id_viddilenya }}"> name= {{$vid->name_viddilenya}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input placeholder="Введіть роль" list="list_role" id="id_role_worker" type="text" class="form-control" name="id_role_worker" value="{{ $masRoleWorkerOne->id_role_worker }}" required>
                    <datalist id="list_role">
                        @foreach($role_worker as $rol)
                            <option value="{{ $rol->id_role_worker }}"> name= {{$rol->name_role_worker}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                </td>
            </tr>
        </table>

        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('admin/worker/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>
@endsection