@extends('layouts.layout')

@section('content')
<div class="col-md-8 blog-main">
    <h1>Add new Post</h1>
    <hr>
    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
           <textarea id="body" name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
        @include('layouts.errors')
    </form>

</div>
@endsection
