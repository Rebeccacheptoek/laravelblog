@extends('layout.app')

@section('content')
    <h1 style="font-size: 40px">Edit Service</h1>
    <div class="mt-2">
{{--        <form action="{{ url('services/update/'.$service->id) }}" method="POST">--}}
        <form action="{{url('services/update/{pages_id}'.$service->id)}}" method="POST">
            @csrf
            <input type="text" name="name" value="{{$service->name}}" class="form-control"><br>
            <textarea name="description" value="{{$service->description}}" rows="5" cols="100">Description</textarea><br>
            <div>
                <input type="submit"name="Submit" class="btn btn-default">
            </div>
        </form>
    </div>
@endsection
