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
                            <td><button class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#modalImage" data-image="{{ $item['image'] }}">
                                Lihat
                              </button>
                              </td>
                            <td><a href="">Detail</a></td>
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
@endsection
