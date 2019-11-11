@extends('news.base')

@section('news-content')

<div class="row">
    <div class="col-lg-7">
        <p>
            No CBIE 2018, na quarta, 31/out, 18:00, haverá o lançamento da Série de Livros de Metodologia de
            Pesquisa em Informática na Educação, uma iniciativa da CEIE/SBC.
        </p>
        <p>
            Essa é uma série de livros sobre metodologia de pesquisa voltada especificamente à comunidade
            de informática na educação e totalmente disponível online.
        </p>
        <p>Acesse a série de livros em <a href="https://metodologia.ceie-br.org" target="_blank">https://metodologia.ceie-br.org</a></p>
    </div>
    <div class="col-lg-5">
        <div class="text-center">
            <img class="rounded" src="{{ $theNews->thumbnail }}" width="100%">
        </div>
    </div>
</div>


@endsection
