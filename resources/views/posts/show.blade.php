@extends('layout.app')

@section('content')
    <a href="{{url('/posts')}}" class="btn btn-primary">Go Back</a>
    <h1 style="font-size: 40px">{{$post->title}}</h1>
    <hr>
    <img  style="width: 100%" src="{{asset("storage/cover_images/$post->cover_image")}}">
    <br><br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <p>Created at: {{\Carbon\Carbon::parse($post->created_at)->toDateString()}}</p>
    <hr>
    @auth()
    <a href="{{ url('posts/edit/'.$post->id) }}" class="btn btn-primary">Edit</a>


    <form action="{{ url('posts/delete/'.$post->id) }}" method="POST" class="pull-right">
        @csrf
        <div>
            <input value="Delete" type="submit" name="Delete" class="btn btn-danger">
        </div>
    </form>
    @endauth
@endsection
