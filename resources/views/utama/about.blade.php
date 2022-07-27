<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Daily Drink</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('template/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        @include('utama.main.header')
        <!-- slider section -->
        <section class="profil_section layout_padding">
            <div class="container">
                <h2 class="custom_heading">My Profile</h2>
                <div>
                    <div id="carouselExampleControls-1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="profil_container layout_padding2">
                                    <div class="profil_img-box">
                                        <img src="{{asset('template/images/profil.png')}}" />
                                    </div>
                                    <div class="profil_detail">
                                        <h3>
                                            ST. FAIZUMMASRUROH
                                        </h3>
                                        <p class="custom_heading-text">
                                            Hello!<br />
                                            I'am owner this website
                                        </p>
                                    </div>
                                    <h5>
                                        Follow Me
                                    </h5>
                                    <div class="social-box">
                                        <a href="">
                                            <img src="{{asset('template/images/fb.png')}}" alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{asset('template/images/twitter.png')}}" alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{asset('template/images/linkedin.png')}}" alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{asset('template/images/instagram.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- end tasty section -->

    <script type="text/javascript" src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
</body>

</html>
