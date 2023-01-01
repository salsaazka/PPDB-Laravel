@extends('layouts.base-admin')

@section('title', 'Data Pembayaran')

@section('content')
    <div>
        @if (Session::get('Success'))
        <div class="alert alert-success w-100">
           {{ Session::get('Success') }}
        </div>
      @endif
      @if (Session::get('notSuccess'))
            <div class="alert alert-danger w-100">
              {{ Session::get('notSuccess') }}
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
                        <th style="width: 10%">No. Registrasi</th>
                        <th style="width: 20%">Nama</th>
                        <th style="width: 10%">Bukti Pembayaran</th>
                        <th style="width: 10%">Detail Pembayaran</th>
                        <th style="width: 15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payment as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item['ppdb_id'] }}</td>
                            <td>{{ $item['nm_bank'] }}</td>
                            <td>
                                {{-- lempar ke halaman admin/image/id --}}
                                <a href="{{ route('image', $item['id']) }}" class="btn btn-outline-primary">Lihat</a>
                            </td>
                            <td>
                                {{-- lempar ke halaman admin/detail/id --}}
                                <a href="{{ route('detail', $item['ppdb_id']) }}" class="btn btn-outline-primary">Lihat</a>
                                {{-- <button style="padding-left: 7px" class="text-dark btn btn-outline-none" data-bs-toggle="modal" data-bs-target="#detail" id="detailData" data-id="{{ $item['id'] }}">
                                    <i class="fa-sharp fa-solid fa-eye"></i></button> --}}
                            </td>
                            <td>
                                <div class="ml-auto">
                                    @if ($item['status'] == 'Diproses')
                                      <div class="d-flex">
                                        <form action="{{ route('approved', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success me-1">Diterima</button>
                                        </form>
                                        <form action="{{ route('reject', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-danger ">Ditolak</button>
                                        </form>
                                      </div>
                                    @else
                                        {{ $item['status'] }}
                                    @endif
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalImage" tabindex="-1" aria-labelledby="modalImageLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalImageLabel">Lihat</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="imgContent">

            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Data Registrasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="look">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
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

    <script>
        $('#modalImage').on('shown.bs.modal', function(e) {
            var html = `
                <img src="{{ url('assets/img/global/${$(e.relatedTarget).data("image")}') }}" class="w-100">
            `;
            $('#imgContent').html(html);
        });
    </script>

    {{-- <script>
        $(document).ready(function () {
        $('body').on('click', '#detailData', function (event) {
          event.preventDefault();
          var id = $(this).data('id');
          $.get('/detail/' + id, function (data) {
            var detail =
            `<ul>
              <li>Nama: ${data.data.name}</li>
              <li>NISN: ${data.data.nisn}</li>
              <li>Jenis  Kelamin: ${data.data.jk}</li>
              <li>Asal Sekolah: ${data.data.school}</li>
              <li>Asal Sekolah Lainnya: ${data.data.sch}</li>
              <li>Email: ${data.data.email}</li>
              <li>No. HP: ${data.data.no_telp}</li>
              <li>No. HP Ayah: ${data.data.no_telpA}</li>
              <li>No. HP Ibu: ${data.no_telpB}</li>
            </ul>`;
            $('#look').html(detail);
          })
        })
      })
    </script> --}}
@endsection
