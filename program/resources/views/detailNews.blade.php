@extends('layout.layoutUser')
@section('contentPage')
    <h1 class="headerMoreNews">{{ $masNews->name_news }}</h1>
    <p class="dateMoreNews">{{ $masNews->created_at }}</p>
    <p class="infoMoreNews">{{ $masNews->text_news }}</p>
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