@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>ID = <?= $masRoleWorkerOne->id_news ?></h1>
    <h2 style="margin-bottom: 50px"><?= $masRoleWorkerOne->	name_news ?></h2>

    <form action="{{ url('admin/news', $masRoleWorkerOne->id_news) }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <div class="">
            <label for="name_news" class="col-md-4 control-label">Нзва</label>
            <input placeholder="Нова назва" id="name_news" type="text" class="form-control" name="name_news" value="{{ $masRoleWorkerOne->name_news }}" autofocus>
        </div>
        <div class="">
            <label for="text_news" class="col-md-4 control-label">Текст</label>
            <textarea placeholder="Нова назва" id="text_news"  class="form-control" name="text_news" value="">
{{ $masRoleWorkerOne->text_news }}
            </textarea>
        </div>
        <div class="">
            <label for="date_news" class="col-md-4 control-label">Дата</label>
            <input placeholder="Нова назва" id="date_news" type="date" class="form-control" name="date_news" value="{{ $masRoleWorkerOne->date_news }}">
        </div>
        <div class="">
            <label for="shortDesk_news" class="col-md-4 control-label">Коротка інформація</label>
            <textarea placeholder="Нова назва" id="shortDesk_news" class="form-control" name="shortDesk_news" value="">
{{ $masRoleWorkerOne->shortDesk_news }}
            </textarea>
        </div>

        <div class="" style="margin-top: 20px; text-align: center;">
            <button type="submit" class="btn btn-success" style="margin-right: 20px">Змінити</button>
            <a href="{{ url('admin/news/view') }}" class="btn btn-primary">НАЗАД</a>
        </div>
    </form>
@endsection