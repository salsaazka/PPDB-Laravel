@extends('layouts.base-home')

@section('content')
    <div>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-transparant">
            <div class="container bg-light py-2 px-5 rounded-pill fixed-top">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        {{-- End Navbar --}}

        {{-- Main Content --}}
        <div class="banner card bg-dark text-white w-100 rounded-0" style="margin-top: -1rem">
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="banner-img" alt="Stony Beach"/>
            <div class="card-img-overlay d-flex flex-column justify-content-center" style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="container">
                    <h1 class="banner-title">PPDB TP 2023-2024</h1>
                    <h1 class="banner-title">SMK Wikrama Bogor</h1>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur repellendus libero iusto fuga in voluptatem obcaecati tempora, eius ut cupiditate, ex cum quidem placeat corrupti illum recusandae beatae atque. Provident!
                    </p>
                    <a href="" class="btn btn-warning rounded-0 p-3 mt-3 text-white">
                        Pendaftaran PPDB
                    </a>
                </div>
            </div>
          </div>
        {{-- End Main Content --}}

    </div>
@endsection
