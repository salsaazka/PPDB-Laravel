@extends('layouts.base-home')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endsection

@section('content')
    <div>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/employees/photo-1.png') }}" class="logoFan">
                    PPDB Wikrama
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-1">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        {{-- End Navbar --}}

        {{-- Main Content --}}

        {{-- Banner --}}

        <div class="banner card bg-dark text-white w-100 rounded-0">
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="banner-img" alt="Stony Beach" />
            <div class="card-img-overlay d-flex flex-column justify-content-center"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="container">
                    <h1 class="banner-title">PPDB TP 2023-2024</h1>
                    <h1 class="banner-title">SMK Wikrama Bogor</h1>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur repellendus libero iusto fuga in
                        voluptatem obcaecati tempora, eius ut cupiditate, ex cum quidem placeat corrupti illum recusandae
                        beatae atque. Provident!
                    </p>
                    <a href="" class="btn btn-warning rounded-0 mt-2 text-white">
                        Pendaftaran PPDB
                    </a>
                </div>
            </div>
        </div>

        {{-- End Banner --}}

        {{-- Info --}}

        <div class="container">
            <div class="info card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <center>1</center>
                        </div>
                        <div class="col">
                            <center>1</center>
                        </div>
                        <div class="col">
                            <center>1</center>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- End Info --}}

        {{-- Jurusan --}}
        <div class="container">
            <div class="jurusan">
                <h2>Jurusan</h2>
                <div class="your-class">
                    <div class="card bg-black p-5 me-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-black p-5 me-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-black p-5 me-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-black p-5 me-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-black p-5 me-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-black p-5 me-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                </div>
            </div>
        </div>
        {{-- End Jurusan --}}

        {{-- End Main Content --}}

    </div>
@endsection

@section('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.your-class').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection
