@extends('layout.layoutUser')
@section('contentPage')
    <div class="NewsPage">
        <h1>Актуальні новини</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 itemNewsPage">
                @foreach( $masRoleWorker as $newsBlock)
                    <a href="{{$newsBlock->id_news}}" class="newsBlock">
                        <h2 class="headerNewsBlock">{{$newsBlock->name_news}}</h2>
                        <span class="descNewsBlock">{{$newsBlock->shortDesk_news}}</span>
                        <span class="dateNewsBlock">{{$newsBlock->created_at}}</span>
                    </a>
                @endforeach
                {{$masRoleWorker->links()}}
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 itemNewsPage">
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
                </div>
            </div>
        </div>
    </div>
@endsection