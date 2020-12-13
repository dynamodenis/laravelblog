@extends('layout/app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        @if (count($posts))
            @foreach ($posts as $post)
                <div class="jumbotron">
                    <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <small>Created on {{$post->created_at}}</small>
                </div>  
            @endforeach
        @else
            <h1>No posts found</h1>
        @endif
    </div>
@endsection