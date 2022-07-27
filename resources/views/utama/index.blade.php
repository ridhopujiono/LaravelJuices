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
        <section class=" slider_section position-relative">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider_item-box">
                            <div class="slider_item-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="slider_item-detail">
                                                <div>
                                                    <h1>
                                                        Welcome to <br />
                                                        Daily Drink
                                                    </h1>
                                                    <p>
                                                        Enjoy a wide variety of delicius juices and smoothies in here
                                                    </p>
                                                    <div class="d-flex">
                                                        <a href="" class="text-uppercase custom_orange-btn mr-3">
                                                            Shop Now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="slider_img-box">
                                                <div>
                                                    <img src="{{asset('template/images/cover home.png')}}" alt=""
                                                        class="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- tasty section -->
    <section class="tasty_section">
        <div class="container_fluid">
            <h2>
                Very tasty juice and smoothies
            </h2>
        </div>
    </section>
    <!-- end tasty section -->

    <script type="text/javascript" src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
</body>

</html>
