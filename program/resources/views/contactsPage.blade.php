@extends('layout.layoutUser')
@section('contentPage')
    <div class="contactPAgeBlock">
    <h1>Контакти</h1>
    <p>Наш телефон <a href="tel:1213123123">086 032 12 03</a></p>
    <p>Наш телефон <a href="tel:1213123123">086 032 12 03</a></p>
    <p>Наш email <a href="mailto:asd@asd.asd">asd@asd.asd</a></p>
    <p>Наш email <a href="mailto:asd@asd.asd">asd@asd.asd</a></p>
    <div id='map' style='height:400px'></div>
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
    </div>
@endsection