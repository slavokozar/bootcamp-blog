@extends('layout')

@section('main-content')
    <h1>BootCamp blog portal</h1>
    <a class="btn btn-primary" href="{{action('PostController@create')}}">Create a new one</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{action('PostController@show', [$post->id])}}">{{$post->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection


@section('footer')
    <p>Some footer</p>
@endsection