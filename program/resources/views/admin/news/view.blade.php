@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису <a href="{{ url('admin/news/create') }}" class="btn btn-success">Створити NEWS</a></h1>
    <form class="form-horizontal" action="{{  url('admin/news/view') }}" method="post" style="margin-bottom: 5px">
        {{csrf_field()}}
        <input type="search" class="form-control" name="searcFile" id="searcFile" placeholder="Введіть назву новини">
        <button type="submit" class="btn btn-info" style="width: 100%">Пошук</button>
    </form>
    <a href="{{  url('admin/news/view') }}" style="margin-bottom: 50px; display: block" class="btn btn-warning">Переглянути всі Новини</a>
    <table class="table table-striped tableView">
        <thead>
        <th>ID</th>
        <th>name_news</th>
        <th>text_news</th>
        <th>date_news</th>
        <th>shortDesk_news</th>
        <th></th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td>ID = <?= $role->id_news?></td>
                <td><a href="<?= $role->id_news?>" class="btn btn-primary">NAME = <?= $role->name_news ?></a></td>
                <td><?= $role->text_news ?></td>
                <td><?= $role->date_news ?></td>
                <td><?= $role->shortDesk_news ?></td>
                <td>
                    <form action="{{url('admin/news/view/'.$role->id_news) }}" method="post">
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