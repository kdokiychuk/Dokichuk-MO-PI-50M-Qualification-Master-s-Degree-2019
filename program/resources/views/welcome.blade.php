@extends('layout.layoutUser')
@section('contentPage')
   <div class="row firstBlockMain">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 itemfirstBlockMain">
         <div class="vidstezenya">
            <div class="formBlock">
                <div class="ajaxDelPost">
                  <h2 class="delHeader">Відстеження посилки</h2>
                   <div id="flash"></div>
                   <div class="resultAjax"></div>
                   <input type="text" name="searcFile" id="searcFile" placeholder="Введіть номер посилки">
                  <button class="buttonSubMain"><img src="{{ asset('img/searchIcon.png') }}" alt=""></button>
                </div>
            </div>
         <ul class="ulMain">
            <li><a href="{{ url('tarufPage') }}">Тарифи</a></li>
            <li><a href="{{ url('viddilenyaPage') }}">Графік роботи відділень</a></li>
            <li><a href="{{ url('onlinePage') }}">Власне API</a></li>
         </ul>
      </div>
      </div>
       <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 itemfirstBlockMain">
         <div id="map"></div>
      </div>
   </div>

   <div class="secondBlockMain">
      <h2>Останні новини</h2>
      <div class="row">
         @foreach( $masRoleWorker as $masNews)
            <a href="<?= $masNews->id_news?>">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 itemNews">
               <div class="date">{{ $masNews->created_at }}</div>
               <div class="shortDes">{{ $masNews->shortDesk_news }}</div>
            </div>
            </a>
         @endforeach
      </div>
      <div class="moreNewsButton"><a href="{{ url('/newsPage') }}" class="btn btn-info">Архів новин</a></div>
   </div>
@endsection