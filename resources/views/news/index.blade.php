@extends('base')

@section('content')

<div class="news_list">
    <div class="container">
        <div class="col-lg-12">
            {{-- <div class="section_title">Latest News</div> --}}
            <div class="news">

                @foreach ($news as $theNews)

                <!-- News Post -->

                <div class="news_post">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                            <div class="news_post_title">
                                    <a href="{{ URL::to('news/'.$theNews->endPoint) }}" title="Ler esta notícia">
                                        {{ \Carbon\Carbon::parse($theNews->publicationDate)->format('d/m/Y')  }} - {{ $theNews->title }}
                                    </a>
                                </div>
                                {{-- <div class="news_post_date float-right">
                                        {{ \Carbon\Carbon::parse($theNews->publicationDate)->format('d/m/Y')  }}</div> --}}
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-start news_clear_bg">


                        <div class="news_post_image">
                            <a href="{{ URL::to('news/'.$theNews->endPoint) }}" title="Ler esta notícia">
                                <img src="{{ $theNews->thumbnail }}">
                            </a>
                        </div>

                        <div class="news_post_body">

                            <div class="news_post_text">{{ $theNews->summary }} [...]</div>
                        </div>
                        <div class="news_post_author"><strong>Palavras-chave:</strong> {{ $theNews->keywords }}</div>

                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
