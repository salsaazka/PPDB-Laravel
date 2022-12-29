@extends('layouts.base-admin')

@section('title', '')

@section('content')
    <div>
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
                    {{-- @foreach ($users as $user )
                    <tr>
                        <td scope="row">{{ ++$i }}</td>
                        <td>{{ $user->no_regis }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->image }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                   @endforeach --}}
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
