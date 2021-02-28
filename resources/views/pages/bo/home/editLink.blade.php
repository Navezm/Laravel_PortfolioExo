@extends('template.second')

@section('content_bo')
    <div class="container">
        <h1 class="my-5">Edit Link</h1>
        <form action="/updateHeroLink/{{$show->id}}" method="POST">
            @csrf
            <input type="text" name="link" class="form-control" value="{{$show->link}}">
            <button class="btn btn-info" type="submit">Update</button>
        </form>
    </div>
@endsection