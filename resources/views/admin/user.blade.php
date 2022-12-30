@extends('layouts.base-admin')

@section('title', '')

@section('content')
    <div>
        @if (Session::get('Success'))
        <div class="alert alert-success w-100">
           {{ Session::get('Success') }}
        </div>  
      @endif
      @if (Session::get('notAllowed'))
            <div class="alert alert-danger w-100">
              {{ Session::get('notAllowed') }}
            </div>  
        @endif
        <div class="wrapperTable table-responsive">
            <table id="userTable" class="tables" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 10%">Nomor Registrasi</th>
                        <th style="width: 20%">Nama</th>
                        <th style="width: 10%">Bukti Pembayaran</th>
                        <th style="width: 10%">Detail Pembayaran</th>
                        <th style="width: 10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payment as $bayar )
                    <tr>
                        <td scope="row">{{ ++$i }}</td>
                        <td>{{ $bayar['ppdb_id'] }}</td>
                        <td>{{ $bayar['name'] }}</td>
                        {{-- <td><a href="">Lihat{{ $bayar->image }}</a></td>
                        <td><a href="{{ $bayar->get::all() }}">Detail</a></td> --}}
                        <td>
                            <div class="ml-auto">
                                {{-- @if (is_null($bayar = 'Diproses')) --}}
                                
                                <form action="{{ route('update', $->id) }}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="fa-sharp fa-solid fa-arrow-rotate-left" 
                                     style="border: none; background:none;">
                                    </button> 
                                </form>  
                                @endif
                                <button style="padding-left: 7px" class="text-dark btn btn-outline-none" data-bs-toggle="modal" data-bs-target="#detail" id="detailData" data-id="{{ $borrow['id'] }}">
                                    <i class="fa-sharp fa-solid fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                   @endforeach
                   <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>
@endsection
