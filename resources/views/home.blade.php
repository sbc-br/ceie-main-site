@extends('base')

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css" integrity="sha256-h7NPLBxMMPcEeO/BDGwCb5MRAZ8CgVcxRxfm3fpMH0s=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" integrity="sha256-KWs9jp+jZzOZmmnW5jC8Y2HqI9rajJig5I00un99DtI=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.0.0-rc.1/video-js.min.css" integrity="sha256-rDQT4VncQ+2SzFGAWVzHW65OlecioCEQDAiY2ZIvi5Y=" crossorigin="anonymous" />

@endsection

@section('scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.0.0-rc.1/video.min.js" integrity="sha256-f6NDQ36ef6RJagoWHxh7ZZyUlt3a50VTB9ZkZLzrqwU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-youtube/2.6.0/Youtube.js" integrity="sha256-+t06TGT33gK9VlGrxFAvlvkpiVXmkV3mpf0a552YYWw=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js" integrity="sha256-+bwq8Vn1b2Nz1mF35GyYCR3WP1zNBq6AX9P+rIR/vg8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js" integrity="sha256-/6NS53KuMVgzxQozkNjhDjwcyDmv8Sk52zodr91uoo4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" integrity="sha256-s5TTOyp+xlSmsDfr/aZhg0Gz+JejYr5iTJI8JxG1SkM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js" integrity="sha256-Jhqqct9kdspgS5FC1W1f/cBOkdDoWMV3eWhU14cqzoY=" crossorigin="anonymous"></script>

<script src="{{ URL::asset('scripts/news.js') }}"></script>

@endsection

@section('content')


<!-- News -->

<div class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section_title text-center" style="padding-top: 5%;">
                        <h3>Bem vindo ao portal da CEIE</h3>
                    </div>
                    <div class="section_subtitle">
                        A Comissão Especial de Informática na Educação (CEIE) engloba os
                        sócios da Sociedade Brasileira de
                        Computação interessados na pesquisa em Informática na Educação.
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
                                <div class="owl-item">
                                    <div class="course">
                                        <div class="course_image"><img src="{{ $theNews->thumbnail }}"
                                                alt="{{ $theNews->summary }}"></div>
                                        <div class="course_body">
                                            <div class="course_title">
                                                <h3>{{ $theNews->title }}</h3>
                                            </div>
                                            <div class="course_text">{{ $theNews->summary }} [...]</div>
                                            <div class="course_footer d-flex align-items-center justify-content-end">
                                                <a href="/news/{{ $theNews->endPoint }}">Ler esta notícia</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>

                    <!-- Courses Slider Nav -->
                    <div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></div>
                    <div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></div>

                </div>

            </div>
        </div>
    </div>

<!-- Milestones -->

<div class="milestones">
    <!-- Background image artis https://unsplash.com/@thepootphotographer -->
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('images/other/milestones.jpg') }}"
        data-speed="0.8"></div>
    <div class="container">
        <div class="row milestones_container">

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('images/other/milestone_1.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="1548">1548</div>
                    <div class="milestone_text">Online Courses</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('images/other/milestone_2.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="7286">7286</div>
                    <div class="milestone_text">Students</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('images/other/milestone_3.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="257">257</div>
                    <div class="milestone_text">Teachers</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('images/other/milestone_4.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="39">39</div>
                    <div class="milestone_text">Countries</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Sections -->

<div class="grouped_sections">
        <div class="container">
            <div class="row">

                <!-- Why Choose Us -->

                <div class="col-lg-4 grouped_col">
                    <div class="grouped_title">Why Choose Us?</div>
                    <div class="accordions">

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center active">
                                <div>Mauris vehicula nisi congue?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Vehicula nisi congue, blandit?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Mauris vehicula nisi congue?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Nisi congue, blandit purus sed?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
                                        venenatis in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Events -->

                <div class="col-lg-4 grouped_col">
                    <div class="grouped_title">Upcoming Events</div>
                    <div class="events">

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">20</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">New Marketing Course Release</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">23</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">Students Art Workshop</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">25</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">Launch Party for a new Platform</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">27</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">New Marketing Course</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">29</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">New Marketing Course</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- News -->

                <div class="col-lg-4 grouped_col">
                    <div class="grouped_title">Latest News</div>
                    <div class="news">

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{ URL::asset('images/other/news_1.jpg') }}"
                                        alt="https://unsplash.com/@beccatapert"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Why Choose online education?</a>
                                </div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{ URL::asset('images/other/news_2.jpg') }}"
                                        alt="https://unsplash.com/@nbb_photos"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{ URL::asset('images/other/news_3.jpg') }}"
                                        alt="https://unsplash.com/@rawpixel"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Why Choose online education?</a>
                                </div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{ URL::asset('images/other/news_4.jpg') }}"
                                        alt="https://unsplash.com/@jtylernix"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video -->

    <div class="video">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="video_container_outer">
                        <div class="video_container">
                            <!-- Video poster image artist: https://unsplash.com/@annademy -->
                            <video id="vid1" class="video-js vjs-default-skin" controls
                                data-setup='{ "poster": "{{ URL::asset('images/other/video.jpg') }}", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/5_MRXyYjHDk"}], "youtube": { "iv_load_policy": 1 } }'>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
