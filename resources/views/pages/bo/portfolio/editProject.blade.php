@extends('template.second')

@section('content_bo')
<div class="container">
    <h1 class="my-5">Edit Project</h1>
    <form action="/updateProjectPortfolio/{{$show->id}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Project Title</label>
          <input type="text" class="form-control" name="title" value="{{$show->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="p" value="{{$show->p}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Image Link</label>
            <input type="text" class="form-control" name="src" value="{{$show->src}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection