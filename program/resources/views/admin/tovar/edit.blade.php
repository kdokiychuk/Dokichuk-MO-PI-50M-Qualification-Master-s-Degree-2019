@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_tovar ?></h1>

    <form action="{{ url('admin/tovar', $masRoleWorkerOne->id_tovar) }}" method="post" class="form-horizontal">
        {{csrf_field()}}

        <table class="table table-striped tableView">
            <th>Номер товару</th>
            <th>Номер відділення</th>
            <th>Ід Відправника<br>Ід Отримувача</th>
            <th>Дата відправлення<br>Дата отримання</th>
            <th>Номер працівника</th>
            <th>Статус товару<br>Тип доставки</th>
            <th>Тип товара<Br>Тип оплати</th>
            <th>Ціна доставки</th>
            <tr>
                <td>
                    {{$masRoleWorkerOne->id_worker}}
                </td>
                <td>
                    <input placeholder="Введіть назву відділення" list="list_vid" id="id_viddilenya" type="text" class="form-control" name="id_viddilenya" value="{{ $masRoleWorkerOne->id_viddilenya }}" required>
                    <datalist id="list_vid">
                        @foreach($viddilennya as $vid)
                            <option value="{{ $vid->id_viddilenya }}"> name= {{$vid->name_viddilenya}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть назву відділення отримання" list="list_vid2" id="id_viddilenya_otrumuvach" type="text" class="form-control" name="id_viddilenya_otrumuvach" value="{{ $masRoleWorkerOne->id_viddilenya_otrumuvach }}" required>
                    <datalist id="list_vid2">
                        @foreach($viddilennya as $vid)
                            <option value="{{ $vid->id_viddilenya }}"> name= {{$vid->name_viddilenya}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input placeholder="Введіть телефон ВІДПРАВНИКА" list="list_vidpravnuk" id="id_vidpravlyvach" type="text" class="form-control" name="id_vidpravlyvach" value="{{ $masRoleWorkerOne->id_vidpravlyvach }}" required>
                    <datalist id="list_vidpravnuk">
                        @foreach($users as $user)
                            <option value="{{ $user->id_users }}">tel= {{$user->phone_users}} name= {{$user->name_users}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть телефон ОТРИМУВАЧА" list="list_otrumyvach" id="id_otrumyvach" type="text" class="form-control" name="id_otrumyvach" value="{{ $masRoleWorkerOne->id_otrumyvach }}" required>
                    <datalist id="list_otrumyvach">
                        @foreach($users as $user)
                            <option value="{{ $user->id_users }}">tel= {{$user->phone_users}} name= {{$user->name_users}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input id="data_vidpravlennya" type="date" class="form-control" name="data_vidpravlennya" value="{{ $masRoleWorkerOne->data_vidpravlennya }}" required>
                    <input id="data_otrumannya" type="date" class="form-control" name="data_otrumannya" value="{{ $masRoleWorkerOne->data_otrumannya }}" required>
                </td>
                <td>
                    <input placeholder="Введіть номер паспорту" list="list_worker" id="id_worker" type="text" class="form-control" name="id_worker" value="{{ $masRoleWorkerOne->id_worker }}" required>
                    <datalist id="list_worker">
                        @foreach($worker as $wor)
                            <option value="{{ $wor->id_worker }}">id= {{$wor->id_worker}} pasport= {{$wor->pasport_worker}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input placeholder="Введіть статус товара" list="list_status_tovara" id="id_status_tovara" type="text" class="form-control" name="id_status_tovara" value="{{ $masRoleWorkerOne->id_status_tovara }}" required>
                    <datalist id="list_status_tovara">
                        @foreach($status_tovara as $sta_tovar)
                            <option value="{{ $sta_tovar->id_status_tovara }}">id= {{$sta_tovar->id_status_tovara}} name= {{$sta_tovar->name_status_tovara}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть тип доставки" list="list_type_dostavka" id="id_type_dostavka" type="text" class="form-control" name="id_type_dostavka" value="{{ $masRoleWorkerOne->id_type_dostavka }}" required>
                    <datalist id="list_type_dostavka">
                        @foreach($type_dostavka as $typ_dostavka)
                            <option value="{{ $typ_dostavka->id_type_dostavka }}">id= {{$typ_dostavka->id_type_dostavka}} name= {{$typ_dostavka->name_type_dostavka}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть адресу доставки" id="name_address" type="text" class="form-control" name="name_address" value="{{ $masRoleWorkerOne->name_address }}" >
                </td>
                <td>
                    <input placeholder="Введіть тип посилки" list="list_type_tovar" id="id_type_tovar" type="text" class="form-control" name="id_type_tovar" value="{{ $masRoleWorkerOne->id_type_tovar }}" required>
                    <datalist id="list_type_tovar">
                        @foreach($type_tovar as $typ_tovar)
                            <option value="{{ $typ_tovar->id_type_tovar }}">id= {{$typ_tovar->id_type_tovar}} name= {{$typ_tovar->name_type_tovar}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть тип оплати" list="list_type_oplata_tovar" id="id_type_oplata_tovar" type="text" class="form-control" name="id_type_oplata_tovar" value="{{ $masRoleWorkerOne->id_type_oplata_tovar }}" required>
                    <datalist id="list_type_oplata_tovar">
                        @foreach($tovar_type_oplata as $typ_oplata)
                            <option value="{{ $typ_oplata->id_type_oplata_tovar }}">id= {{$typ_oplata->id_type_oplata_tovar}} name= {{$typ_oplata->name_type_oplata_tovar}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input id="price" type="text" class="form-control" name="price" value="{{ $masRoleWorkerOne->price }}" required>
                </td>
            </tr>
        </table>

        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('admin/tovar/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>
@endsection