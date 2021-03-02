@extends('template.second')

@section('content_bo')
<div class="container">
    <h1 class="my-5">Edit Genre</h1>
    <form action="/updateGenrePortfolio/{{$show->id}}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" value="{{$show->title}}">
        <label for="">Filter</label>
        <input type="text" name="filter" class="form-control" value="{{$show->filter}}">
        <button class="btn btn-info" type="submit">Update</button>
    </form>
</div>
@endsection