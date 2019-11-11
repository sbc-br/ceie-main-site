@extends('base')

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css"
    integrity="sha256-h7NPLBxMMPcEeO/BDGwCb5MRAZ8CgVcxRxfm3fpMH0s=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"
    integrity="sha256-KWs9jp+jZzOZmmnW5jC8Y2HqI9rajJig5I00un99DtI=" crossorigin="anonymous" />

@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"
    integrity="sha256-s5TTOyp+xlSmsDfr/aZhg0Gz+JejYr5iTJI8JxG1SkM=" crossorigin="anonymous"></script>

<script src="{{ URL::asset('scripts/news.js') }}"></script>
<script src="{{ URL::asset('scripts/mail.js') }}"></script>

@endsection

@section('content')


<!-- News -->

<div class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_subtitle">
                    A Comissão Especial de Informática na Educação (CEIE) engloba os sócios da Sociedade Brasileira de
                    Computação interessados na pesquisa em Informática na Educação
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Courses Slider -->
                <div class="courses_slider_container">
                    <div class="owl-carousel owl-theme courses_slider">

                        @foreach ($news as $theNews)

                        <!-- Slider Item -->
                        <div class="owl-item {{ in_array($theNews->id, $newsFixBorder)? 'course_fix_border':'' }}">
                            <div class="course">
                                <div class="course_image">
                                    <a href="/news/{{ $theNews->endPoint }}" title="Clique aqui para ler esta notícia">
                                        <img src="{{ $theNews->thumbnail }}" alt="{{ $theNews->summary }}">
                                    </a>
                                </div>
                                <div class="course_body">
                                    <div class="course_title">
                                        <a href="/news/{{ $theNews->endPoint }}"
                                            title="Clique aqui para ler esta notícia">
                                            <h4>{{ $theNews->title }}</h4>
                                        </a>
                                    </div>
                                    <div class="course_text">{{ $theNews->summary }} [...]</div>
                                    <div class="course_footer d-flex align-items-center justify-content-end">
                                        <a href="/news/{{ $theNews->endPoint }}"
                                            title="Clique aqui para ler esta notícia">Ler esta notícia <i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>

                <!-- Courses Slider Nav -->
                <div class="courses_slider_nav courses_slider_prev trans_200" title="Rolar para a esquerda"><i
                        class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="courses_slider_nav courses_slider_next trans_200" title="Rolar para a direita"><i
                        class="fa fa-angle-right" aria-hidden="true"></i></div>

            </div>

        </div>
    </div>
</div>

<!-- Mission and goals -->

<div class="divider div-transparent"></div>
<div class="about">
    <div class="container">
        <div class="row about_row row-lg-eq-height">
            <div class="col-lg-12">
                <div class="about_content">
                    <div class="section_title">Objetivo</div>
                    <div class="about_text">
                        <img src="{{ URL::asset('images/icons/target.svg') }}" style="float: left; margin-right: 30px;"
                            width="125px">
                        <p>
                            A Comissão Especial de Informática na Educação (CEIE), da Sociedade Brasileira de Computação
                            (SBC), tem como
                            missão definir e apoiar políticas de pesquisa, desenvolvimento e inovação em informática na
                            educação (IE) e
                            executar ações pela melhoria da qualidade da educação brasileira de forma articulada com os
                            órgãos governamentais,
                            sociedade, setor produtivo e comunidade científica
                        </p>
                        <p>
                            A <a href="/">CEIE</a> procura ser uma referência nacional na efetiva implantação de
                            políticas públicas
                            pela melhoria da educação, na geração de conhecimento e tecnologias de vanguarda em IE
                            e na formação avançada de recursos humanos. Para isto, esta comissão promove a pesquisa
                            científica e o desenvolvimento tecnológico em informática na educação através de seus
                            eventos e meios de publicação (i.e. anais, revistas, site) e desenvolve parcerias
                            estratégicas para a efetiva implantação das políticas educacionais no contexto nacional
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-right">
                <div class="button text-center" title="Clique aqui para ler na íntegra o regimento da CEIE"><a
                        href="{{ URL::asset('files/RegimentoCEIE2013-vf.pdf') }}" target="_blank">Ler
                        regimento<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a></div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="divider div-transparent"></div> --}}
<div class="teachers">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title">Comissões gestoras</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin-top: 30px; margin-bottom: 30px;">
                    Anualmente a CEIE realiza uma Reunião Plenária durante o SBIE na qual
                    são definidas as comissões gestoras da
                    <a href="{{ $ceiePortal->homePage }}">CEIE</a> e da
                    <a href="{{ $rbiePortal->homePage }}" target="_blank">RBIE</a>,
                    para o próximo período de 1 ano.

                    A última reunião foi realizada no dia <strong>30/10/2018 às 19 horas</strong> e elegeu as atuais comissões.
                    A seguir você pode conhecer os representantes e verificar a ata da reunião.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col text-right">
                <div class="button text-center" title="Clique aqui para ler na íntegra a ata da última reunião">
                    <a href="{{ URL::asset('files/ATACEIE2018.pdf') }}" target="_blank">Ler ata <div
                            class="button_arrow">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="section_title">Comissão da CEIE</div>
            </div>
        </div>
        <div class="row teachers_row">

            <!-- CEIE committee -->
            @foreach ($ceiePortal->currentCommittee()->members as $member)

            <!-- CEIE committee members -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="teacher">
                    <a href="http://lattes.cnpq.br/{{ $member->user->lattesId }}" target="_blank"
                        title="Acessar o currículo Lattes de {{ $member->user->name }}">
                        <div class="teacher_image">
                            <img src="{{ $member->user->thumbnail }}" alt="https://unsplash.com/@rawpixel">
                        </div>
                    </a>
                    <div class="teacher_body text-center">
                        <div class="teacher_title"><a href="http://lattes.cnpq.br/{{ $member->user->lattesId }}"
                                target="_blank"
                                title="Acessar o currículo Lattes de {{ $member->user->name }}">{{ $member->user->name }}</a>
                        </div>
                        <div class="teacher_subtitle"><a href="{{ $member->user->institution->homePage }}"
                                target="_blank"
                                title="Accessar home page da instituição {{ $member->user->institution->name }}">{{ $member->user->institution->shortName }}</a>
                        </div>
                        <div class="teacher_subtitle">{{ $member->role->title }}</div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <div class="row">
                <div class="col">
                    <div class="section_title">Comissão da RBIE</div>
                </div>
            </div>
        <div class="row teachers_row">

                <!-- RBIE committee -->
                @foreach ($rbiePortal->currentCommittee()->members as $member)

                <!-- RBIE committee members -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="teacher">
                        <a href="http://lattes.cnpq.br/{{ $member->user->lattesId }}" target="_blank"
                            title="Acessar o currículo Lattes de {{ $member->user->name }}">
                            <div class="teacher_image">
                                <img src="{{ $member->user->thumbnail }}" alt="https://unsplash.com/@rawpixel">
                            </div>
                        </a>
                        <div class="teacher_body text-center">
                            <div class="teacher_title"><a href="http://lattes.cnpq.br/{{ $member->user->lattesId }}"
                                    target="_blank"
                                    title="Acessar o currículo Lattes de {{ $member->user->name }}">{{ $member->user->name }}</a>
                            </div>
                            <div class="teacher_subtitle"><a href="{{ $member->user->institution->homePage }}"
                                    target="_blank"
                                    title="Accessar home page da instituição {{ $member->user->institution->name }}">{{ $member->user->institution->shortName }}</a>
                            </div>
                            <div class="teacher_subtitle">{{ $member->role->title }}</div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
    </div>
</div>


<div class="contact">
    <div class="container-fluid">
        <div class="row row-xl-eq-height">
            <!-- Contact Content -->
            <div class="col-xl-12">
                <div class="contact_content">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="contact_about">
                                <div class="section_title">Contato</div>
                                <div class="contact_about_text">
                                    <p>Deixe aqui a sua mensagem, entraremos em contato assim que possível</p>
                                </div>
                                <div class="contact_form_container">
                                    <form action="#" id="contact_form" class="contact_form">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6 contact_name_col">
                                                    <input type="text" class="contact_input" placeholder="Nome"
                                                        name="contact_name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="contact_input" placeholder="E-mail"
                                                        name="contact_email">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="text" class="contact_input" placeholder="Assunto"
                                                name="contact_message_subject">
                                        </div>
                                        <div>
                                            <textarea class="contact_input contact_textarea" placeholder="Mensagem"
                                                name="contact_message_content"></textarea>
                                        </div>

                                        <div>
                                            <div class="row">
                                                <div class="col text-center">
                                                    <div class="button float-right"
                                                        title="Clique aqui para enviar a mensagem ao administrador do portal">
                                                        <a href="javascript:void(0);" id="contact_send">Enviar
                                                            <div class="button_arrow" id="contact_button_arrow">
                                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                            </div>

                                                            <div class="button_arrow d-none" style="padding-top: 5px;"
                                                                id="contact_button_loading">
                                                                <div class="spinner-border text-warning" role="status">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
