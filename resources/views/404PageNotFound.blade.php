@extends('User.Main.mainLayout')
@section('title', 'Home | Dotcsa')
@section('content')
<div class="container">
    <div class="text-center m-5">
        <h1>Page Not Found </h1><br>
        <a href="{{ route('index') }}" class="btn btn-danger btn-lg">Back To Home</a>
    </div>
</div>
@endsection