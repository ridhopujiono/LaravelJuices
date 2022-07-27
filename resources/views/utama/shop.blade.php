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
    <div class="hero_area sub_pages">

        @include('utama.main.header')

    </div>
    <!-- juice section -->
    <section class="juice_section layout_padding-top">
        <div class="container">
            <h2 class="custom_heading">List Products</h2>
            <p class="custom_heading-text">
                A Wide Variety Fruit Juices Available.
            </p>

            @forelse ($data as $d)
            <div class="row layout_padding2">
                <div class="col-md-8">
                    <div class="juice_detail-box">
                        <h3>
                            {{$d->nama_barang}}
                        </h3>
                        <p class="mt-4 mb-5">
                            Hp. {{$d->harga}},-

                        </p>
                        <div>
                            <a href="#" class="custom_dark-btn">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="juice_img-box d-flex justify-content-center align-items-center">
                        <img src="{{url($d->foto)}}" alt="" class="" width="160px" />
                    </div>
                </div>
            </div>
            @empty
            <p class="custom_heading-text mt-5">
                Product Is Empty
            </p>
            @endforelse
        </div>
    </section>
    <!-- end fruits section -->


    <script type="text/javascript" src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
</body>

</html>
