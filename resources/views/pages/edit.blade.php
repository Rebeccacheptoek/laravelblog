@extends('layout.app')

@section('content')
    <h1 style="font-size: 40px">Edit Service</h1>
    <div class="mt-2">
        <form action="{{url('services/update/'.$service->id)}}" method="POST">
            @csrf
            <label>Name</label>
            <input type="text" name="name" value="{{$service->name}}" class="form-control"><br>
            <label>Description</label>
            <textarea name="description" value="{{$service->description}}" rows="5" cols="100" placeholder="Description" class="form-control"></textarea><br>
            <label>Status</label>
            <input type="number" name="status" class="form-control" value="1"><br>
            <div>
                <input type="submit"name="Submit" class="btn btn-default">
            </div>
        </form>
    </div>
@endsection
