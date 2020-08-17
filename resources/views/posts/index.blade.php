@extends('layouts.app')

@section('content')

    <div class="container">
        @auth
            <a href="/create" class="btn btn-success">Create Post</a>
        @endauth
        <div class="row">

            @foreach($posts as $post)
                <div class="card mb-2 col-md-8 offset-2 bg-primary text-white">
                    <div class="card-body">
                        <a href="/{{ $post->id }}" class="text-decoration-none text-white">
                            <span class="card-title font-weight-bold">{{$post->title}}</span>
                        </a>
                        <span class="small float-right">{{ $post->created_at->diffForHumans() }}</span>
                        <p class="card-text">{{$post->user->name}}</p>
                        <p class="card-text">{{$post->content}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
