@extends('layout.layoutUser')

@section('contentPage')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <div class="panel panel-default">
                <div class="panel-heading">Доска</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        Привет, {{ Auth::user()->name_users }}<br>
                        Перейдіть на головну сторінку або інші.
                        <ul class="nav navbar-nav userMenu" >
                            <li><a href="{{ url('/') }}">Головна</a></li>
                            <li><a href="{{ url('viddilenyaPage') }}">Відділення</a></li>
                            <li><a href="{{ url('tarufPage') }}">Тарифи</a></li>
                            <li><a href="{{ url('contactsPage') }}">Контакти</a></li>
                            <li><a href="{{ url('newsPage') }}">Новини</a></li>
                            <li><a href="{{ url('onlinePage') }}">Власне API</a></li>
                            <li><a href="{{ url('admin') }}">Панель Адміністратора</a></li>
                            <li><a href="{{ url('operator') }}">Панель Оператора</a></li>
                            <li><a href="{{ url('courier') }}">Панель Кур'єра</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
