@extends('layout.layoutUser')
@section('contentPage')
 <div class="apiPAGE">
 <h1>Власне API</h1>
 <p>Для підключення API (пошуку місця знаходження посилки та пошуку відділень на карті) виконайте наступні дії:</p>
 <p>Скопіюйте та підключіть скрипт на ваш сайт:</p>
 <code> <input  style="width: 100%" disabled type="text" value="<script src='http://127.0.0.1:8000/js/map.js'></script>"></code>
 <p>Для підключення віджету пошуку відділень на карті використайте додатковий скрипт ініціалізацї:</p>
 <code><input style="width: 100%" type="text" value="<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBZvFQnwcTYbgAjThs0fma57EoD3YEXqq4&callback=initMap'></script>" disabled>
  </code>
 <p>Для підключення пошуку відділень на карті вставте нижче приведений код в будь-якому місці на сайті:</p>
 <code><input style="width: 100%" type="text" value="<div id='map' style='height:400px'></div>" disabled></code>
 <p>Для підключення пошуку місця знаходження посилки вставте нижче приведений код в будь-якому місці на сайті:</p>
 <code><input style="width: 100%" type="text" value="<div class='ajaxDelPost'>
 <h2 class='delHeader'>Відстеження посилки</h2>
 <div id='flash'></div>
 <div class='resultAjax'></div>
 <input type='text' name='searcFile' id='searcFile' placeholder='Введіть номер посилки'>
 <button class='buttonSubMain'><img src='{{ asset('img/searchIcon.png') }}' alt=''></button>
</div>" disabled></code>
<p>ВДАЛОЇ ВАМ ІНТЕГРАЦІЇ!!!</p>
 </div>
@endsection

