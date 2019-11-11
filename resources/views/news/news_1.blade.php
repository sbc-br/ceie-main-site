@extends('news.base')

@section('news-content')
<div class="row">
    <div class="col-lg-7">
        <p>
            O Congresso Brasileiro de Informática da Educação (CBIE) é um evento anual da SBC,
            de caráter internacional, que busca promover e incentivar as trocas de experiências
            entre as comunidades científica, profissional, governamental e empresarial na área
            de Informática na Educação. Assim, visa a promoção de discussões e soluções para
            melhorias na educação com o apoio de Tecnologia da Informação e Comunicação (TIC).
        </p>

        <p>
            Em 2018, o CBIE será realizado nos dias 29 de outubro a 01 de novembro de 2018, no hotel
            Oásis Atlântico, Fortaleza/CE. O tema será: Informática na Educação - Educação e Empreendedorismo
        </p>
        <p>
            Para maiores informações acesse: <a href="http://cbie2018.virtual.ufc.br">http://cbie2018.virtual.ufc.br</a>
        </p>
    </div>
    <div class="col-lg-5">
        <div class="text-center">
            <img class="rounded" src="{{ URL::asset('images/news/'.$theNews->id.'/picture-0.png') }}" width="100%">
        </div>
    </div>
</div>
@endsection
