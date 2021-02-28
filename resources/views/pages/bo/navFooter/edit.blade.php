@extends('template.second')

@section('content_bo')
    <div class="container">
        <h1 class="my-5">Edit Link</h1>
        <form action="/updateFooterLink/{{$show->id}}" method="POST">
            @csrf
            <input type="text" name="icon" class="form-control" value="{{$show->icon}}">
            <button class="btn btn-info" type="submit">Update</button>
        </form>
    </div>
@endsection