@extends('layout.app')

@section('content')
    <h1 style="font-size: 40px">Create Post</h1>
    <div class="mt-2">
        <form action="{{ url('/your-url') }}" method="POST">
            @csrf
            <div class="w-100">
                <label>Title</label>
                <input type="text" name="title" value="" placeholder="Your title" class="form-control">
            </div>
            <div class="w-100">
                <label>Body</label>
                <textarea type="text" name="body" id="summary-ckeditor" value="" placeholder="Type here" class="form-control"></textarea>
            </div>
            <br>
            <div>
                <input type="submit" name="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
