@extends('news.base')

@section('news-content')
<div class="row">
    <div class="col-lg-12">
        <p>
            O Congresso Brasileiro de Informática da Educação (CBIE) é um evento anual da Sociedade Brasileira de
            Computação (SBC), de caráter internacional, que tem como objetivo geral promover um fórum para reunir a
            comunidade da área de Informática na Educação, possibilitando a troca de informações e o estabelecimento de
            metas para que os desafios educacionais do Brasil sejam superados. Em particular, o CBIE funciona como um
            fórum para debater e propor avanços e soluções na área de Informática na Educação, visando ao
            desenvolvimento da educação em todos os seus níveis, com o apoio da tecnologia.
        </p>

        <div class="text-center">
            <a href="https://cbie.ceie-br.org" target="_blank" title="Acessar a página do CBIE 2019">
                <img class="rounded" src="{{ $theNews->thumbnail }}" width="450">
            </a>
        </div>

        <p>
            O tema deste ano será

            <strong>
                “A Computação na perspectiva da diversidade, inclusão e inovação na
                educação para o século XXI”
            </strong>,

            pois considera que a Informática na Educação orientada por estes conceitos contribui
            significativamente para o progresso da sociedade contemporânea. A proposta está alicerçada na relevância da
            computação para as diversas áreas de conhecimento, em especial a Educação e, sobretudo, na formação do
            cidadão para o novo milênio.
        </p>
        <p>
            O CBIE 2019 congregará palestrantes nacionais e internacionais, pesquisadores, professores, alunos e demais
            interessados no tema, constituindo-se num espaço privilegiado de discussões, reflexões, troca de saberes,
            interconexão de experiências vivenciadas em diferentes contextos e realidades, na busca de uma nova ecologia
            para uma sociedade permeada pela cultura digital.
        </p>
        <p>
            Para maiores informações acesse:
            <a href="https://cbie.ceie-br.org" target="_blank" title="Acessar a página do CBIE 2019">https://cbie.ceie-br.org</a>
        </p>
    </div>
    {{-- <div class="col-lg-5">
        <div class="text-center">
            <img class="rounded" src="{{ $theNews->thumbnail }}" width="100%">
</div>
</div> --}}
</div>
@endsection
