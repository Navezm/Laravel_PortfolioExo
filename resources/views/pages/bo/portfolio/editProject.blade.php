@extends('template.second')

@section('content_bo')
<div class="container">
    <h1 class="my-5">Edit Project</h1>

     {{-- Div Error --}}
     @if ($errors->updateProject->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->updateProject->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- Div Error --}}

    <form action="/updateProjectPortfolio/{{$show->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Project Title</label>
          <input type="text" class="form-control" name="title" value="{{old('title') ? old('title') : $show->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="p" value="{{old('p') ? old('p') : $show->p}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" name="src">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection