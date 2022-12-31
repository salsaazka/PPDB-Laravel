@extends('layouts.base-admin')

@section('title', 'Contact Us')

@section('content')
<div>
    <div class="wrapperTable table-responsive">
        <table id="userTable" class="tables" style="width:100%">
            <thead>
                <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Nama</th>
                    <th style="width: 20%">Email</th>
                    <th style="width: 30%">Pesan</th>
                    <th style="width: 10%">No. Telp</th>
            </thead>
            <tbody>
                @foreach ($contact as $key => $i)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $i['name'] }}</td>
                    <td>{{ $i['email'] }}</td>
                    <td>{{ $i['message'] }}</td>
                    <td>{{ $i['no_telp'] }}</td>
                   
                </tr>
                @endforeach
                  
               
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
