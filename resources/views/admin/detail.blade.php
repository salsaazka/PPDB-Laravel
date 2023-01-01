@extends('layouts.base-admin')

@section('title', 'Detail Pembayaran')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
            <div class="mt-4">
                <ul>
                    <li>
                        <p class="fw-bold">No. Registrasi : <span class="fw-normal">{{ $Ppdb->id }}</span></p>
                    </li>
                    <li>
                        <p class="fw-bold">Nama : <span class="fw-normal">{{ $Ppdb->name }}</span></p>
                    </li>
                    <li>
                        <p class="fw-bold">NISN : <span class="fw-normal">{{ $Ppdb->nisn }}</span></p>
                    </li>
                    <li>
                        <p class="fw-bold">Sekolah : <span class="fw-normal">{{ $Ppdb->school }}</span></p>
                    </li>
                    <li>
                        <p class="fw-bold">Email : <span class="fw-normal">{{ $Ppdb->email }}</span></p>
                    </li>
                    <li>
                        <p class="fw-bold">No Telp : <span class="fw-normal">{{ $Ppdb->no_telp }}</span></p>
                    </li>
                    <li>
                        <p class="fw-bold">No Telp Cadangan : <span class="fw-normal">{{ $Ppdb->no_telpA }}</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

