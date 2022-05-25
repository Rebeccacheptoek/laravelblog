@extends('layout.app')

@section('content')
    <h1 style="font-size: 40px">Posts</h1>
    @if (count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img  style="width: 100%" src="{{asset("storage/cover_images/$post->cover_image")}}">
                    </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="{{ url('/posts/' . $post->id) }}">{!! $post->title !!} - {{\Carbon\Carbon::parse($post->created_at)->toDateString()}}</a></h3>
                        </div>
                    </div>
                </div>
        @endforeach
{{--        {{$posts->links()}}--}}
    @else
        <p style="font-size: 20px">No posts found</p>
    @endif
@endsection

