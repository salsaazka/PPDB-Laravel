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
                <a class="navbar-brand" id="#">
                    <img src="{{ asset('assets/img/employees/wikrama.jpeg') }}" alt="" class="logoFan">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-1 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#jurusan" >Jurusan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#tkami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hub">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#login">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        {{-- Main Content --}}

        {{-- Banner --}}

        <div class="banner card bg-dark text-white w-100 rounded-0" style="margin-top: -1rem" >
            <img src="{{ asset('assets/img/employees/gedung boxies.jpeg') }}" class="banner-img" alt="" />
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

        <div class="container mb-5">
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
        <div class="container mb-5">
            <div class="jurusan" >

                <div class="text-head text-center mb-4"  >
                    <h2>Jurusan</h2>
                    <h6>SMK Wikrama Bogor</h6>
                </div>
                <div class="your-class" id="jurusan">
                    <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B"><b>PPLG</b></h5>
                            <h4>  Pengembangan Perangkat Lunak dan Gim</h4>
                        </p>
                        <p class="text-muted"><b>Keunggulan</b></p>
                        Desktop Programming, Web Programming, Mobile Programming, Businnes Analyst, Database Administration.
                    </div>
                   <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">TJKT</h5>
                            <h4>r</h4>
                            <p class="text-muted"><b>Keunggulan</b></p>
                            Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan CNA (Mikrotik Certified Network Associate)
                        </p>

                    </div>
                   <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">DKV</h5>
                            <p class="text-muted"><b>Keunggulan</b></p>
                            Lulusan dapat memiliki kesempata kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identifty, penerbit majalah/koran, dll.
                        </p>

                    </div>
                   <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">MPLB</h5>
                            <p class="text-muted"><b>Keunggulan</b></p>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">HTL</h5>
                            <p class="text-muted"><b>Keunggulan</b></p>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                    <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">KLN</h5>
                            <p class="text-muted"><b>Keunggulan</b></p>
                        </p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque sit tenetur minima accusantium. In,
                        impedit ipsa. Modi architecto magnam provident, blanditiis quidem earum animi obcaecati quod iste
                        magni necessitatibus voluptas?
                    </div>
                </div>
            </div>
        </div>
        {{-- End Jurusan --}}


        {{-- About --}}
        <div class="about d-flex w-100" id="tkami">
            <div class="w-50 main">
                <img src="{{ asset('assets/img/employees/gedung wikrama.jpeg') }}">
            </div>
            <div class="w-50 h-100 secound d-flex flex-column">
                <div class="h-50 row-1 d-flex">
                    <div class="w-50">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BeIHXmayzIA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="w-50">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur autem maxime sapiente modi iste eaque voluptatum laboriosam architecto quam, sit hic, quod maiores facilis soluta neque veritatis voluptatem! Eveniet, exercitationem.</p>
                        </div>
                    </div>
                </div>
                <div class="h-50 row-2 d-flex">
                    <div class="w-50">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur autem maxime sapiente modi iste eaque voluptatum laboriosam architecto quam, sit hic, quod maiores facilis soluta neque veritatis voluptatem! Eveniet, exercitationem.</p>
                        </div>
                    </div>
                    <div class="w-50">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Wag6WcgKO6o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        {{-- End About --}}

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
  slidesToShow: 2.1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("a").on('click', function(event) {

        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        }
      });
    });
    </script>
    <script>
        setInterval(function(){
            $(document).ready(function(){
            var url = window.location.href;
            if(url.indexOf('#jurusan') != -1){
                $('#juru').addClass('active');
                $('#home').removeClass('active');
            } else if(url.indexOf('#') != -1){
                $('#home').addClass('active');
                $('#juru').removeClass('active');
            }
        });
        }, 100);
    </script>
@endsection
