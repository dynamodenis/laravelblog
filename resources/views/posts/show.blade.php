@extends('layout/app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <small>Created on {{$post->created_at}}</small>
        </div>
    </div>
@endsection