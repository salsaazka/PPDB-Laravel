@extends('layouts.base-admin')

@section('title', 'Detail Image')

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
        <div class="mt-4">
            <center>
                <img src="{{ url('assets/img/global/'.$payment->image) }}" alt="w-25">
            </center>
        </div>
    </div>
</div>
@endsection
