@extends('layout.app')

@section('content')
    <h1>Add Service</h1>
    <a href="{{ url('services/manage') }}" class="btn btn-primary">Go Back</a><br><br>
    <form action="{{url('services/store/')}}" method="POST">
        @csrf
            <label>Name</label>
            <input type="text" name="name" class="form-control"><br>
            <label>Description</label>
            <textarea name="description" rows="5" cols="100" placeholder="Description" class="form-control"></textarea><br>
            <label>Status</label>
            <input type="number" name="status" class="form-control"><br>
            <button type="submit" >Submit</button>
    </form>
    <br>
@endsection
