@extends('layout.layoutAdmin')
@section('contentPage')
    <h1>Натисність для редагування запису</h1>
    <form class="form-horizontal" method="POST" action="{{ url('admin/news/create') }}">
        {{csrf_field()}}
        <table class="table table-striped tableView">
            <thead>
            <th>ID</th>
            <th>name_news</th>
            <th>text_news</th>
            <th>date_news</th>
            <th>shortDesk_news</th>
            <th></th>
            </thead>
            <tr>
                <td>
                    {{$masRoleWorkerLast->id_news +1}}
                </td>
                <td>
                    <input id="name_news" type="text" class="form-control" name="name_news" value="{{ old('name_news') }}" required>
                </td>
                <td>
                    <textarea id="text_news" class="form-control" name="text_news" value="{{ old('text_news') }}" required>

                    </textarea>
                </td>
                <td>
                    <input id="date_news" type="date" class="form-control" name="date_news" value="{{ old('date_news') }}" required>
                </td>
                <td>
                    <textarea id="shortDesk_news"  class="form-control" name="shortDesk_news" value="{{ old('shortDesk_news') }}" required>

                    </textarea>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ url('admin/news/view') }}" class="btn btn-primary">НАЗАД</a>
@endsection