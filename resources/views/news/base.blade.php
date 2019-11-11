@extends('base')

@section('content')

<div class="news_reading">
    <div class="container">
        <div class="section_title">{{ $theNews->title }}</div>
        <div class="news_content">
            @yield('news-content')
        </div>
    </div>
</div>

@endsection
