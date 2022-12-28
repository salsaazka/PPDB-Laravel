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
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr><tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>v</td>
                        <td>d</td>
                        <td>s</td>
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
