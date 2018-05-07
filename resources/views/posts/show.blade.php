@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>

        <p>{{ $post->body }}</p>

        <hr>

        <div class="comments">
            <h4>Comments:</h4>
            <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name }}:
                    </strong>
                    {{ $comment->body }}
                </li>
            @endforeach
            </ul>
        </div>
        <hr>
        <div class="">
            @guest
                <div class="form-group">
                    <textarea readonly name="body" placeholder="Sign in to write comments!" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary disabled">Add comment</button>
                </div>
            @else

                    <form method="POST" action="/posts/{{ $post->id }}/comments">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add comment</button>
                        </div>
                    </form>
                    @include('layouts.errors')
            @endguest
        </div>
    </div>
@endsection
