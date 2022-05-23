@extends('layout.app')

@section('content')
    <h1 style="font-size: 40px">{{$service->title}}</h1>
    <hr>
    @auth()
        <a href="{{ url('services/store'.$service->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ url('services/delete/'.$service->id) }}" method="POST" class="pull-right">
            @csrf
            <div>
                <input value="Delete" type="submit" name="Delete" class="btn btn-danger">
            </div>
        </form>
    @endauth
@endsection
