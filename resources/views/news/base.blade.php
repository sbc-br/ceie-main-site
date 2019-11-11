@extends('base')

@section('content')

<div class="news_reading">
    <div class="container">
        <div class="section_title">{{ $theNews->title }}</div>
        <div class="news_content">
            @yield('news-content')

            <div class="row back_button">
                <div class="col text-right">
                    <div class="button"><a href="/">Voltar ao Início
                            <div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
