@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису <a href="{{ url('admin/viddilenya/create') }}" class="btn btn-success">Створити VIDILENYA</a></h1>
    <h2>
        <form class="form-horizontal" action="{{  url('admin/viddilenya/view') }}" method="post" style="margin-bottom: 5px">
            {{csrf_field()}}
            <input type="search" class="form-control" name="searcFile" id="searcFile" placeholder="Введіть назву відділення">
            <button type="submit" class="btn btn-info" style="width: 100%">Пошук</button>
        </form>
        <a href="{{  url('admin/viddilenya/view') }}" style="margin-bottom: 50px; display: block" class="btn btn-warning">Переглянути всі Відділення</a>
    </h2>
    <table class="table table-striped tableView">
        <thead>
        <th>ID</th>
        <th>name_viddilenya</th>
        <th>address_viddilenya</th>
        <th>city_viddilenya</th>
        <th>chas_robotu_viddilenya</th>
        <th></th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td>ID = <?= $role->id_viddilenya?></td>
                <td><a href="<?= $role->id_viddilenya?>" class="btn btn-primary">NAME = <?= $role->name_viddilenya ?></a></td>
                <td><?= $role->address_viddilenya ?></td>
                <td><?= $role->city_viddilenya ?></td>
                <td><?= $role->chas_robotu_viddilenya ?></td>
                <td>
                    <form action="{{url('admin/viddilenya/view/'.$role->id_viddilenya) }}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button class="btn btn-danger">Видалити</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
    @if( $coutFroPag  > 1)
    {{$masRoleWorker->links()}}
    @endif
@endsection