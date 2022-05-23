@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
{{--    table with name, description and action--}}
    <form action="{{url('services/manage')}}" method="POST">
        @csrf
{{--        <label for="name">Name</label>--}}
{{--        <input type="text" name="name">--}}
{{--        <label for="description">Description</label>--}}
{{--        <textarea rows="5" cols="10"></textarea>--}}
{{--        <button class="btn btn-default">Save</button>--}}
        <table class="table table-striped">
            <tr>
                @foreach ($data as $)
                    <th><strong> {{ $name }} </strong></th>
                @endforeach

{{--                @foreach ($profile as $person)--}}

{{--                    @foreach ($person as $name)--}}

{{--                        <td> {{ $name }} </td>--}}

{{--                    @endforeach--}}

{{--                @endforeach--}}
            </tr>
        </table>
    </form>
@endsection
