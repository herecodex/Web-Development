@extends('layouts.app')

@section('content')
    <br>
    <h1>Edit Post</h1>
    <form method="POST" action="/posts_update">
        @csrf
        <input type="hidden" name="id" value="{!! $post->id !!}">
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{!! $post->title !!}">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="body">{!! $post->body !!}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
