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
                    <img src="{{ asset('assets/img/employees/wikrama.jpeg') }}" alt="" srcset="" style="width: 30px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-1 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="#beranda">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#jurusan">Jurusan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="#tkami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#hub">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#login">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav> 

        {{-- <nav class="navbar navbar-expand-lg bg-transparant">
            <div class="container bg-light py-2 px-5 rounded-pill fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/employees/wikrama.jpeg') }}" alt="" srcset="" style="width: 30px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-1 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="#beranda">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#jurusan">Jurusan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " style="color: black" href="#tkami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#hub">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="#login">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav> --}}
        {{-- End Navbar --}}

        {{-- Main Content --}}

        {{-- Banner --}}

        <div class="banner card bg-dark text-white w-100 rounded-0" style="margin-top: -1rem" id="beranda">
            <img src="{{ asset('assets/img/employees/gedung boxies.jpeg') }}" class="banner-img" alt="Stony Beach" />
            <div class="card-img-overlay d-flex flex-column justify-content-center"
                style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="container">
                    <h1 class="banner-title">PPDB TP 2023-2024</h1>
                    <h1 class="banner-title">SMK Wikrama Bogor</h1>
                    <p class="card-text pt-2">
                       Ayo! Segera daftarkan dirimu ke SMK WIkrama dengan cara klik <b>PENDAFTRAN PPDB</b> dibawah ini!
                       <b>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah</b>
                    </p>

                    <a href="/form" class="btn btn-warning rounded-0 p-3 mt-3 text-white">
                        PENDAFTARAN PPDB
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
                        <div class="col-12 col-md-4">
                            <center>
                                <h5><b>MOTTO</b></h5>
                                <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah</p>
                            </center>
                        </div>
                        <div class="col-12 col-md-4">
                            <center>
                                <h5><b>AFIRMASI</b></h5>
                                <p>Padamu negeri- kami berjanji- lulus Wikrama siap membangun negeri!</p>
                            </center>
                        </div>
                        <div class="col-12 col-md-4">
                            <center>
                                <h5><b>ATTITUDE</b></h5>
                                <p>Aku ada lingkunganku bahagia</p>
                            </center>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- End Info --}}

        {{-- Jurusan --}}
        <div id="jurusan" class="container">
            <div class="jurusan" >
                
                    <h2>Jurusan</h2>
                <div class="your-class">
                    <div class="card bg-light p-5 me-2">
                        <p class="text-dark">
                            <h4 class="">PPLG</h4>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                   <div class="card bg-light p-5 me-2">
                        <p class="text-dark">
                            <h4 class="">TJKT</h4>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                   <div class="card bg-light p-5 me-2">
                        <p class="text-dark">
                            <h4 class="">DKV</h4>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                   <div class="card bg-light p-5 me-2">
                        <p class="text-dark">
                            <h4 class="">MPLB</h4>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-light p-5 me-2">
                        <p class="text-dark">
                            <h4 class="">HTL</h4>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-light p-5 me-2">
                        <p class="text-dark">
                            <h4 class="">KLN</h4>
                        </p>
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
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
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
