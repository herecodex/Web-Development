@extends('layouts.app')

@section('content')
    <br>
    <h1>Create Post</h1>
    <form method="Post" action="/posts_store">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" Class="form-control" id="formGroupExampleInput" name="title">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="body"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection