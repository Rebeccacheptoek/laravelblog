@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
    <button type="button" class="btn btn-default position:absolute; top:0; right:0;"><a href="{{ url('/services') }}">Add Service</a></button>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th> <font face="Arial">ID</font> </th>
            <th> <font face="Arial">User Id</font> </th>
            <th> <font face="Arial">Name</font> </th>
            <th> <font face="Arial">Description</font> </th>
            <th> <font face="Arial">Status</font> </th>
            <th> <font face="Arial">Action</font> </th>
        </tr>

        @foreach($services as $service)
            <tr>
                <th> <font face="Arial">{{$service->id}}</font> </th>
                <th> <font face="Arial"></font>{{$service->user_id}}</th>
                <th> <font face="Arial">{{$service->name}}</font> </th>
                <th> <font face="Arial">{{ $service->description }}</font> </th>
                <th> <font face="Arial">
                        @if($service->status === 1)
                            Active
                        @else
                            Inactive
                        @endif</font> </th>

                    <th> <font face="Arial">
                        <a href="{{ url('services/edit/' . $service->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                        <a href="{{ url('services/delete/' . $service->id) }}" class="btn btn-danger">Delete</a></font>
                    </th>
            </tr>
        @endforeach
@endsection
