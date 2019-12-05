@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Кількість товарів = {{$allTovars}} <br>Натисність для редагування запису <a href="{{ url('admin/tovar/create') }}" class="btn btn-success">Створити TOVAR</a></h1>
    <h2>
        <form class="form-horizontal" action="{{  url('admin/tovar/view') }}" method="post" style="margin-bottom: 5px">
            {{csrf_field()}}
            <input type="search" class="form-control" name="searcFile" id="searcFile" placeholder="Введіть номер товару">
            <button type="submit" class="btn btn-info" style="width: 100%">Пошук</button>
        </form>
        <a href="{{  url('admin/tovar/view') }}" style="margin-bottom: 50px; display: block" class="btn btn-warning">Переглянути всі Товари</a>
    </h2>
    <table class="table table-striped tableView">
        <thead>
        <th>Номер товару</th>
        <th>Номер відділення </th>
        <th>Ід Відправника<br>Ід Отримувача</th>
        <th>Дата відправлення<br>Дата отримання</th>
        <th>Номер працівника</th>
        <th>Статус товару<br>Тип доставки</th>
        <th>Тип товара<Br>Тип оплати</th>
        <th>price</th>
        <th></th>
        </thead>
        @foreach ($masRoleWorker as $role)
            <tr>
                <td><a href="<?= $role->id_tovar?>" class="btn btn-primary">Id TOVAR = <?= $role->id_tovar ?></a></td>
                <td><?= $role->id_viddilenya ?><br><?= $role->id_viddilenya_otrumuvach ?></td>
                <td><?= $role->id_vidpravlyvach ?><br><?= $role->id_otrumyvach ?></td>
                <td><?= $role->data_vidpravlennya ?><br><?= $role->data_otrumannya ?></td>
                <td><?= $role->id_worker ?></td>
                <td><?php if($role->id_status_tovara == 5){
                        echo "<span class='needRed'> $role->id_status_tovara </span>";
                    }else{
                        echo $role->id_status_tovara;
                    } ?><br><?= $role->id_type_dostavka ?></td>
                <td><?= $role->id_type_tovar ?><br><?= $role->id_type_oplata_tovar ?><br><?= $role->name_address ?></td>
                <td><?= $role->price ?></td>
                <td>
                    <form action="{{url('admin/tovar/view/'.$role->id_tovar) }}" method="post">
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