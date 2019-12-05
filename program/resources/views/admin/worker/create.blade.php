@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('admin/worker/create') }}">
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
                    {{$masRoleWorkerLast->id_worker +1}}
                </td>
                <td>
                        <input placeholder="Введіть телефон" list="list_users" id="id_users" type="text" class="form-control" name="id_users" value="{{ old('id_users') }}" required>
                    <datalist id="list_users">
                        @foreach($users as $user)
                            <option value="{{ $user->id_users }}">tel= {{$user->phone_users}} name= {{$user->name_users}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input id="pasport_worker" type="text" class="form-control" name="pasport_worker" value="{{ old('pasport_worker') }}" required>
                </td>
                <td>
                    <input placeholder="Введіть назву відділення" list="list_vid" id="id_viddilennya" type="text" class="form-control" name="id_viddilennya" value="{{ old('id_viddilennya') }}" required>
                    <datalist id="list_vid">
                        @foreach($viddilennya as $vid)
                            <option value="{{ $vid->id_viddilenya }}"> name= {{$vid->name_viddilenya}}</option>
                        @endforeach
                    </datalist>

                </td>
                <td>
                    <select name="id_role_worker" id="id_role_worker" class="form-control">
                        @foreach($role_worker as $role)
                            <option value="{{ $role->id_role_worker }}">{{ $role->id_role_worker }} name= {{ $role->name_role_worker}}</option>
                        @endforeach
                    </select>
                </td>

                <td>
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ url('admin/worker/view') }}" class="btn btn-primary">НАЗАД</a>
@endsection