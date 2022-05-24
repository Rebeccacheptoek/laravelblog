@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
    <button type="button" class="btn btn-default position:absolute; top:0; right:0;"><a href="{{ url('add/') }}">Add Service</a></button>
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
                <th> <font face="Arial"></font>
{{--                    @foreach($services as $service)--}}
                        <small>{{ $service->user->name }}</small>
{{--                    @endforeach--}}
                </th>
                <th> <font face="Arial">{{$service->name}}</font> </th>
                <th> <font face="Arial">{{ $service->description }}</font> </th>
                <th> <font face="Arial">
                        @if($service->status === 1)
                            Active
                        @else
                            Inactive
                        @endif</font> </th>

                    <th><font face="Arial"></font>
                        <a href="{{ url('services/edit/' . $service->id) }}" class="btn btn-primary">Edit</a>
                           <form action="{{ url('services/delete/' . $service->id) }}" method="POST">
                               @csrf
                                   <input value="Delete" type="submit" name="Delete" class="btn btn-danger">
                        </form>
                    </th>
            </tr>
        @endforeach
@endsection
