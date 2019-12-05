@extends('layout.layoutUser')
@section('contentPage')
    <h1>Тарифи</h1>
    <p style="font-size: 20px">Доставка з «Delivery POST» – це вигідно та зручно:</p>
    <ul>
        <li style="font-size: 20px">мінімальні вагові діапазони – від 0,5 кг;</li>
        <li style="font-size: 20px">спеціальний знижений тариф на доставку в межах міста та передмістя (для Києва, Одеси, Львова,<br>Дніпра та Харкова) діє для всіх клієнтів та видів відправлень.</li>
    </ul>
    <p style="margin-top: 50px; font-size: 20px ">Оберіть пункт меню для іншої інформації</p>
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
@endsection