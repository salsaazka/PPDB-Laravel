@extends('layouts.base-user')

@section('title', 'Hai, Student!')

@section('content')
@if (Session::get('notSuccess'))
    <div class="alert alert-danger w-100">
        {{ Session::get('notSuccess') }}
     </div>
 @endif

<p class="text-muted"><b>{{ Auth::user()->name }}</b> Selamat Datang!</p>
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