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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


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
                                    <a href="index.html">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <div class="logo_img"><img
                                                    src="{{  URL::asset('images/logo/full_logo.svg') }}" alt=""></div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Navbar menu -->

                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="/">Início</a></li>
                                        <li><a href="/news">Notícias</a></li>
                                        <li><a href="/documents">Documentos</a></li>
                                        <li><a href="/links">Links</a></li>
                                        <li><a href="/contact">Contato</a></li>
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
                    <li class="menu_mm"><a href="/">Início</a></li>
                    <li class="menu_mm"><a href="/news">Notícias</a></li>
                    <li class="menu_mm"><a href="/documents">Documentos</a></li>
                    <li class="menu_mm"><a href="/links">Links</a></li>
                    <li class="menu_mm"><a href="/contact">Contato</a></li>
                </ul>
            </nav>
        </div>

        <!-- Content -->

        @yield('content')

        {{-- <!-- Join -->

        <div class="join">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section_title text-center">
                            <h2>Join Our Platform Today</h2>
                        </div>
                        <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut
                            euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in.
                            Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">Contato</div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Endereço:</div>
                                    <div class="footer_contact_line">
                                        Av. Bento Gonçalves, 9500 | Setor 4 | Prédio 43.412 | Sala 219 |
                                        Bairro Agronomia Caixa Postal 15012 | CEP 91501-970 Porto Alegre - RS
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">&nbsp;</div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Telefone:</div>
                                    <div class="footer_contact_line">(51) 3308-6835</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-1 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">&nbsp;</div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Email:</div>
                                    <div class="footer_contact_line">sbc@sbc.org.br</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 footer_col">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> -
                            <a href="https://www.sbc.org.br/" target="_blank">www.sbc.org.br</a>.
                            Todos os direitos reservados. | Este site foi feito com um modelo da
                            <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>

    <script src="{{ URL::asset('scripts/menu.js') }}"></script>

    @yield('scripts')


</body>

</html>
