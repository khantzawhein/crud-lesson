@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-2 col-md-8 offset-2 bg-secondary text-white">
            <div class="card-body">
                <span class="card-title font-weight-bold">{{$post->user->name}}</span>
                <span class="small float-right">{{ $post->created_at->diffForHumans() }}</span>
                <p class="card-text">{{$post->title}}</p>
                <p class="card-text">{{$post->content}}</p>
                <form action="/{{ $post->id }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger" type="submit">Delete</button>
                    <a href="/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                </form>

            </div>
        </div>
    </div>
@endsection
