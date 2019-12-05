@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('admin/viddilenya/create') }}">
        {{csrf_field()}}
        <table class="table table-striped tableView">
            <thead>
            <th>ID</th>
            <th>name_viddilenya</th>
            <th>address_viddilenya</th>
            <th>city_viddilenya</th>
            <th>chas_robotu_viddilenya</th>
            <th></th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerLast->id_viddilenya +1}}
                </td>
                <td>
                    <input id="name_viddilenya" type="text" class="form-control" name="name_viddilenya" value="{{ old('name_viddilenya') }}" required>
                </td>
                <td>
                    <input id="address_viddilenya" type="text" class="form-control" name="address_viddilenya" value="{{ old('address_viddilenya') }}" required>
                </td>
                <td>
                    <input id="city_viddilenya" type="text" class="form-control" name="city_viddilenya" value="{{ old('city_viddilenya') }}" required>
                </td>
                <td>
                    <input id="chas_robotu_viddilenya" type="text" class="form-control" name="chas_robotu_viddilenya" value="{{ old('chas_robotu_viddilenya') }}" required>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ url('admin/viddilenya/view') }}" class="btn btn-primary">НАЗАД</a>
@endsection