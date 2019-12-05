@extends('layout/header')
<header>
    <p>header COURIER</p>
</header>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Delivery POST
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('viddilenyaPage') }}">Відділення</a></li>
                    <li><a href="{{ url('tarufPage') }}">Тарифи</a></li>
                    <li><a href="{{ url('contactsPage') }}">Контакти</a></li>
                    <li><a href="{{ url('newsPage') }}">Новини</a></li>
                    <li><a href="{{ url('onlinePage') }}">Власне API</a></li>
                    <li><a href="{{ url('admin') }}">Панель Адміністратора</a></li>
                    <li><a href="{{ url('operator') }}">Панель Оператора</a></li>
                    <li><a href="{{ url('courier') }}">Панель Кур'єра</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}">Логін</a></li>
                    <li><a href="{{ route('register') }}">Реєстрація</a></li>
                    @else
                        <li class="dropdown displayInlineBlockStyle">
                            <a href="{{ route('home') }}">Привет, {{ Auth::user()->name_users }}</a>

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Вихід
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">
    <?php
    $idLoginUser = Auth::id();
    $roleUserPage =  App\workerModel::all()->where('id_users', $idLoginUser)->first();
    if (((Auth::check()) && ($roleUserPage->id_role_worker == 1))|| ((Auth::check()) && ($roleUserPage->id_role_worker == 2))|| ((Auth::check()) && ($roleUserPage->id_role_worker == 3))) {

    ?>
    @yield('contentPage')
    <?php
    }else{
    ?>
    <h2>Сторінка тільки для адміна та Оператора та курьєра</h2>
    <?php
    }
    ?>
</div>

@extends('layout/footer')