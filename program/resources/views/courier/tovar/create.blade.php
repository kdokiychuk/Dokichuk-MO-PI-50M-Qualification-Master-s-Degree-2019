@extends('layout.layoutCourier')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('courier/tovar/create') }}">
        {{csrf_field()}}
        <table class="table table-striped tableView">
            <thead>
            <th>Номер товару</th>
            <th>Номер відділення</th>
            <th>Ід Відправника<br>Ід Отримувача</th>
            <th>Дата відправлення<br>Дата отримання</th>
            <th>Номер працівника</th>
            <th>Статус товару<br>Тип доставки</th>
            <th>Тип товара<Br>Тип оплати</th>
            <th>Ціна доставки</th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerLast->id_worker +1}}
                </td>
                <td>
                    <input placeholder="Введіть назву відділення" list="list_vid" id="id_viddilenya" type="text" class="form-control" name="id_viddilenya" value="{{ old('id_viddilenya') }}" required>
                    <datalist id="list_vid">
                        @foreach($viddilennya as $vid)
                            <option value="{{ $vid->id_viddilenya }}"> name= {{$vid->name_viddilenya}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть назву відділення отримання" list="list_vid2" id="id_viddilenya_otrumuvach" type="text" class="form-control" name="id_viddilenya_otrumuvach" value="{{ old('id_viddilenya_otrumuvach') }}" required>
                    <datalist id="list_vid2">
                        @foreach($viddilennya as $vid)
                            <option value="{{ $vid->id_viddilenya }}"> name= {{$vid->name_viddilenya}}</option>
                        @endforeach
                    </datalist>

                </td>
                <td>
                    <input placeholder="Введіть телефон ВІДПРАВНИКА" list="list_vidpravnuk" id="id_vidpravlyvach" type="text" class="form-control" name="id_vidpravlyvach" value="{{ old('id_vidpravlyvach') }}" required>
                    <datalist id="list_vidpravnuk">
                        @foreach($users as $user)
                            <option value="{{ $user->id_users }}">tel= {{$user->phone_users}} name= {{$user->name_users}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть телефон ОТРИМУВАЧА" list="list_otrumyvach" id="id_otrumyvach" type="text" class="form-control" name="id_otrumyvach" value="{{ old('id_otrumyvach') }}" required>
                    <datalist id="list_otrumyvach">
                        @foreach($users as $user)
                            <option value="{{ $user->id_users }}">tel= {{$user->phone_users}} name= {{$user->name_users}}</option>
                        @endforeach
                    </datalist>
                </td>

                <td>
                    <input id="data_vidpravlennya" type="date" class="form-control" name="data_vidpravlennya" value="{{ old('data_vidpravlennya') }}" required>
                    <input id="data_otrumannya" type="date" class="form-control" name="data_otrumannya" value="{{ old('data_otrumannya') }}" required>


                </td>
                <td>
                    <input placeholder="Введіть номер паспорту" list="list_worker" id="id_worker" type="text" class="form-control" name="id_worker" value="{{ old('id_worker') }}" required>
                    <datalist id="list_worker">
                        @foreach($worker as $wor)
                            <option value="{{ $wor->id_worker }}">id= {{$wor->id_worker}} pasport= {{$wor->pasport_worker}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input placeholder="Введіть статус товара" list="list_status_tovara" id="id_status_tovara" type="text" class="form-control" name="id_status_tovara" value="{{ old('id_status_tovara') }}" required>
                    <datalist id="list_status_tovara">
                        @foreach($status_tovara as $sta_tovar)
                            <option value="{{ $sta_tovar->id_status_tovara }}">id= {{$sta_tovar->id_status_tovara}} name= {{$sta_tovar->name_status_tovara}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть тип доставки" list="list_type_dostavka" id="id_type_dostavka" type="text" class="form-control" name="id_type_dostavka" value="{{ old('id_type_dostavka') }}" required>
                    <datalist id="list_type_dostavka">
                        @foreach($type_dostavka as $typ_dostavka)
                            <option value="{{ $typ_dostavka->id_type_dostavka }}">id= {{$typ_dostavka->id_type_dostavka}} name= {{$typ_dostavka->name_type_dostavka}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть адресу доставки" id="name_address" type="text" class="form-control" name="name_address" value="{{ old('name_address') }}" >
                </td>

                <td>
                    <input placeholder="Введіть тип посилки" list="list_type_tovar" id="id_type_tovar" type="text" class="form-control" name="id_type_tovar" value="{{ old('id_type_tovar') }}" required>
                    <datalist id="list_type_tovar">
                        @foreach($type_tovar as $typ_tovar)
                            <option value="{{ $typ_tovar->id_type_tovar }}">id= {{$typ_tovar->id_type_tovar}} name= {{$typ_tovar->name_type_tovar}}</option>
                        @endforeach
                    </datalist>
                    <input placeholder="Введіть тип оплати" list="list_type_oplata_tovar" id="id_type_oplata_tovar" type="text" class="form-control" name="id_type_oplata_tovar" value="{{ old('id_type_oplata_tovar') }}" required>
                    <datalist id="list_type_oplata_tovar">
                        @foreach($tovar_type_oplata as $typ_oplata)
                            <option value="{{ $typ_oplata->id_type_oplata_tovar }}">id= {{$typ_oplata->id_type_oplata_tovar}} name= {{$typ_oplata->name_type_oplata_tovar}}</option>
                        @endforeach
                    </datalist>
                </td>
                <td>
                    <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required>
                </td>

            </tr>
        </table>
        <a href="{{ url('courier/tovar/view') }}" class="btn btn-primary">НАЗАД</a> <button type="submit" class="btn btn-primary"> Зберегти </button>
    </form>

@endsection