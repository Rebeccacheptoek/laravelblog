@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
{{--    @if(count($services) > 0)--}}
        <ul style="list-style-type: square" class="list-group">
            @forelse($services as $service)
            <li class="list-group-item">{{$service->name}}</li>
            @empty
                <li class="list-group-item">No services offered</li>
            @endforelse
        </ul>

    <form action="{{url('services/store/')}}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" class="form-control"><br>
        <label>Description</label>
        <textarea name="description" rows="5" cols="100" placeholder="Description" class="form-control"></textarea><br>
        <button type="submit" >Submit</button>
    </form><br>
    <a href="{{url('services/manage')}}" >Manage Services</a>
    <hr>
    @auth()
    <a href="{{ url('services/store/'.$service->id) }}" class="btn btn-primary ">Edit</a>
    <form action="{{ url('services/delete/'.$service->id) }}" method="POST" class="pull-right">
        @csrf
        <div>
            <input value="Delete" type="submit" name="Delete" class="btn btn-danger">
        </div>
    </form>
    @endauth
@endsection
