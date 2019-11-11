<!DOCTYPE html>
<html lang="{{ $page->locale }}">

<head>
    <meta charset="{{ $page->charset }}">

    <!-- Metadata for search engines -->
    <meta name="application-name" content="{{ $page->title }}">
    <meta name="description" content="{{ $page->description }}">
    <meta name="author" content="{{ $page->author }}">
    <meta name="keywords" content="{{ $page->keywords }}">

    <!-- Metadados para facebook -->
    <meta property="og:locale" content="{{ $page->locale }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:description" content="{{ $page->description }}" />
    <meta property="og:url" content="{{ $page->url }}" />
    <meta property="og:site_name" content="{{ $page->siteName }}" />
    <meta property="og:image" content="{{ $page->thumbnail }}" />

    <!-- Metadados para twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $page->description }}" />
    <meta name="twitter:title" content="{{ $page->title }}" />
    <meta name="twitter:image" content="{{ $page->thumbnail}}" />

    <title>{{ $page->title }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


    @yield('styles')

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/responsive.css') }}">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">

                                <!-- Navbar logo -->

                                <div class="logo_container">
                                    <a href="/home" title="Clique aqui para voltar à página inicial do portal">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <div class="logo_img"><img
                                                    src="{{  URL::asset('images/logo/full_logo.svg') }}" alt=""></div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Navbar menu -->

                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li class="{{ Str::endsWith($page->url, '/home')? 'active' : '' }}">
                                            <a href="/home"
                                                title="Clique aqui para voltar à página inicial do portal">Início</a>
                                        </li>
                                        <li
                                            class="{{ (Str::endsWith($page->url, '/news') || Str::contains($page->url, '/news/'))? 'active' : '' }}">
                                            <a href="/news"
                                                title="Clique aqui para ver uma lista com todas as notícias">Notícias</a>
                                        </li>
                                        {{-- <li class="{{ Str::endsWith($page->url, '/documents')? 'active' : '' }}">
                                        <a href="/documents">Documentos</a>
                                        </li>
                                        <li class="{{ Str::endsWith($page->url, '/links')? 'active' : '' }}">
                                            <a href="/links">Links</a>
                                        </li> --}}
                                        {{-- <li><a href="/contact">Contato</a></li> --}}
                                    </ul>

                                    <!-- Hamburger -->

                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="/home">Início</a></li>
                    <li class="menu_mm"><a href="/news">Notícias</a></li>
                    {{-- <li class="menu_mm"><a href="/documents">Documentos</a></li>
                    <li class="menu_mm"><a href="/links">Links</a></li> --}}
                    {{-- <li class="menu_mm"><a href="/contact">Contato</a></li> --}}
                </ul>
            </nav>
        </div>

        <div class="home">
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title">{{ $page->welcomeMessage }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->

        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 footer_col">
                        <div class="copyright">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> - Todos os direitos reservados para a <a href="https://www.sbc.org.br/"
                                target="_blank">Sociedade Brasileira de Computação</a>
                            {{-- (<a href="https://www.sbc.org.br/" target="_blank">www.sbc.org.br</a>) --}}

                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <div>
                                Esta página foi desenvolvida com base em um modelo da <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a> |
                                Ícones criados por <a href="https://www.flaticon.com/authors/vectors-market"
                                    title="Vectors Market" target="_blank">Vectors Market</a> em <a
                                    href="https://www.flaticon.com/" target="_blank"
                                    title="Flaticon">www.flaticon.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal" id="app-modal-dialog" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button" style="min-width: 10px;" data-dismiss="modal"> <a style="padding-right: 20px;" href="javascript:void(0);">OK</a></button>
                    {{-- <div class="row">
                        <div class="col text-right">
                            <div class="button text-center" style="min-width: 30px;" data-dismiss="modal"
                                title="Clique aqui para ler na íntegra o regimento da CEIE">
                                <a href="javascript:void(0);">
                                    OK <div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"
        integrity="sha256-+bwq8Vn1b2Nz1mF35GyYCR3WP1zNBq6AX9P+rIR/vg8=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"
        integrity="sha256-/6NS53KuMVgzxQozkNjhDjwcyDmv8Sk52zodr91uoo4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"
        integrity="sha256-Jhqqct9kdspgS5FC1W1f/cBOkdDoWMV3eWhU14cqzoY=" crossorigin="anonymous"></script>

    <script>
        var baseUrl = '{{ URL::to('/') }}';
    </script>
    <script src="{{ URL::asset('scripts/menu.js') }}"></script>

    @yield('scripts')

</body>

</html>
