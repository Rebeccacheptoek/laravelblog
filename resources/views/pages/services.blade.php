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
    <a href="{{url('services/manage')}}" >Manage Services</a>
@endsection
