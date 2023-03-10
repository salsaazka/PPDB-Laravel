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
                            <a class="nav-link" href="/login">Login</a>
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

                    <a href="/auth/register" class="btn btn-warning rounded-0 p-3 mt-3 text-white">
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
                            <h4>Teknik Jaringan Komputer dan Telekomunikasi</h4>
                            <p class="text-muted"><b>Keunggulan</b></p>
                            Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan CNA (Mikrotik Certified Network Associate).
                        </p>

                    </div>
                   <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">DKV</h5>
                            <h4>Desain Komunikasi Visual</h4>
                            <p class="text-muted"><b>Keunggulan</b></p>
                            Lulusan dapat memiliki kesempata kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identifty, penerbit majalah/koran, dll.
                        </p>

                    </div>
                    <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">PMN</h5>
                            <h4>Pemasaran</h4>
                            <p class="text-muted"><b>Keunggulan</b></p>
                        </p>
                        Lulusan program ini diharuskan mampu membuat foto produk, desain, copy writing, dll. Kompetensi ini juga sering melakukan praktik diluar ruangan dengan melakukan jual-beli di cafe atau lingkungan sekitar sekolah.
                    </div>
                   <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">MPLB</h5>
                            <h4>Manajemen Perkantoran Lembaga Bisnis</h4>
                            <p class="text-muted"><b>Keunggulan</b></p>
                        </p>
                       Memiliki keunggulan seperti juara 2 lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan olimpiade sekretaris tingkat nasional tahun 2017.
                    </div>
                    <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">HTL</h5>
                            <h4>Perhotelan</h4>
                            <p class="text-muted"><b>Keunggulan</b></p>
                        </p>
                       Mampu bekerja di departemen yang ada di hotel dengan kompetensi yang telah dimiliki dan poelajari.
                    </div>
                    <div class="card bg-light p-5 me-3">
                        <p class="text-dark">
                            <h5 style="color: #02225B">KLN</h5>
                            <h4>Kuliner</h4>
                            <p class="text-muted"><b>Keunggulan</b></p>
                        </p>
                        Mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.
                    </div>
                </div>
            </div>
        </div>
        {{-- End Jurusan --}}


        {{-- About --}}
        <div class="about d-flex w-100 flex-column flex-md-row" id="tkami">
            <div class="w-100 w-md-50 main">
                <img src="{{ asset('assets/img/employees/gedung wikrama.jpeg') }}">
            </div>
            <div class="w-100 w-md-50 h-100 secound d-flex flex-column" id="tkami">
                <div class="h-50 row-1 d-flex">
                    <div class="w-50">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BeIHXmayzIA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="w-50">
                        <div class="text pt-5">
                            <h5 class="text-warning">7 Kompetensi Keahlian SMK Wikrama Bogor</h5>
                            <p>Mengenal 7 kompetensi yang ada di SMK Pusat Keunggulan SMK Wikrama Bogor</p>
                        </div>
                    </div>
                </div>
                <div class="h-50 row-2 d-flex">
                    <div class="w-50">
                        <div class="text pt-5">
                            <h5 class="text-warning">Profi TEFA</h5>
                            <p>Mengenal TEFA yang ada di SMK Pusat Keunggulan SMK Wikrama Bogor</p>
                        </div>
                    </div>
                    <div class="w-50">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Wag6WcgKO6o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        {{-- End About --}}

        {{-- Testimoni --}}
        <div class="testimoni container my-5">
            <div class="text-head text-center mb-4"  >
                <h2>Testimoni</h2>
                <h6>SMK Wikrama Bogor</h6>
            </div>
            <div class="mt-5" id="testimoni">
                <div class="hr"></div>
                <div class="slick">
                    <div class="desc">
                        <h1 class="text-orange"><span class="bg-light">2000</span></h1>
                        <p class="text-primary">AKHMAD MUNITO</p>
                        <p>Maju terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yang sangat bermanfaat .</p>
                        <p class="text-primary">Administrasi Perkantoran (APK)</p>
                    </div>
                    <div class="desc">
                        <h1 class="text-orange"><span class="bg-light">2011</span></h1>
                        <p class="text-primary">LUTFI HAKIM</p>
                        <p>SMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.</p>
                        <p class="text-primary">Rekayasa Perangkat Lunak (RPL)</p>
                    </div>
                    <div class="desc">
                        <h1 class="text-orange"><span class="bg-light">2016</span></h1>
                        <p class="text-primary">KAMALUDIN</p>
                        <p>Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.</p>
                        <p class="text-primary">Rekayasa Perangkat Lunak (RPL)</p>
                    </div>
                    <div class="desc">
                        <h1 class="text-orange"><span class="bg-light">2017</span></h1>
                        <p class="text-primary">SYAFITRI</p>
                        <p>Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.</p>
                        <p class="text-primary">Rekayasa Perangkat Lunak (RPL)</p>
                    </div>
                    <div class="desc">
                        <h1 class="text-orange"><span class="bg-light">2018</span></h1>
                        <p class="text-primary">TIFANI</p>
                        <p>Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.</p>
                        <p class="teXt-primary">Rekayasa Perangkat Lunak (RPL)</p>
                    </div>
                    
                </div>
            </div>
        </div>
        {{-- End Testimoni --}}

        {{-- Contact --}}
        <div class="contact">
            <div class="container">
                @if (Session::get('success'))
                <div class="alert alert-success w-100">
                   {{ Session::get('success') }}
                </div>
            @endif

                <h2 class="text-center">Hubungi Kami</h2>
                <div class="content mt-5 d-flex w-100">
                    <div class="satu" id="hub">
                        <h5>Kontak Pendaftaran</h5>
                        <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
                        CS 1: <a href="https://wa.me/6281909242411" class="text-light bold"><b>Hubungi Kami Disini</b></a><br>
                        CS 2: <a href="https://wa.me/6281919242411" class="text-light"><b>Hubungi Kami Disini</b></a><br><br>
                        <a href="/auth/register" class="btn btn-warning rounded-pill p-2 text-white">
                            Daftar Sekarang
                        </a>
                    </div>
                    <div class="dua">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control rounded px-3 py-3" id="exampleInputEmail1" placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <div class="d-flex">
                                    <input type="number" name="no_telp" class="form-control rounded px-3 py-3 w-50 me-2" id="exampleInputEmail1" placeholder="+62">
                                    <input type="email" name="email" class="form-control rounded px-3 py-3 w-50 ms-2" id="exampleInputEmail1" placeholder="Email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control rounded px-3 py-3" placeholder="Pesan" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning rounded-pill p-2 text-white">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Contact --}}

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

        $('.slick').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3.1,
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
