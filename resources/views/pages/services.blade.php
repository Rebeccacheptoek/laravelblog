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
        <label>Status</label>
        <input type="number" name="status" class="form-control" value="1"><br>
        <button type="submit" >Submit</button>
    </form><br>
    <a href="{{url('services/manage')}}" >Manage Services</a>
@endsection
