@extends('layouts.base-user')

@section('title', 'Hai, Student!')

@section('content')

@if($bayar['status'] == 'Ditolak' )
<div class="alert alert-danger w-100">
   Pembayaran Anda ditolak oleh Admin!
</div> 
@endif 


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