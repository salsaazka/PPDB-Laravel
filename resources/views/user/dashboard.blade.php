@extends('layouts.base-user')

@section('title', 'Hai, Student!')

@section('content')

@if($bayar['status'] == 'Ditolak' )
<div class="alert alert-danger w-100">
   Pembayaran Anda ditolak oleh Admin!
</div> 
@endif 

<h3 class="text-primary">Hai, {{ Auth::user()->name }}!</h3>
<p class="text-muted">Selamat Datang!</p>
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