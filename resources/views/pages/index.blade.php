@extends('layout.app')


@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel</h1>
        <p>Laravel is fun to learn , take it easy</p>
        <p><a class="btn btn-primary btn-lg" href="{{ url('/login') }}" role="button">Login</a><a class="btn btn-success btn-lg" href="{{url('/register')}}" role="button">Register</a></p>
    </div>
@endsection

