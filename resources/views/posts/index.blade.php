@extends('layout.app')

@section('content')
    <h1 style="font-size: 40px">Posts</h1>
    @if (count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="{{ url('/posts/' . $post->id) }}">{!! $post->title !!} - {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</a></h3>
                <!--<p>{{$post->body}}</p>
                <p>Created at: {{\Carbon\Carbon::parse($post->created_at)->toDateString()}}</p>-->
            </div>
        @endforeach
{{--        {{$posts->links()}}--}}
    @else
        <p style="font-size: 20px">No posts found</p>
    @endif
@endsection
