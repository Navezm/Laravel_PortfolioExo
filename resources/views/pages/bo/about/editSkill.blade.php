@extends('template.second')

@section('content_bo')
    <div class="container">
        <h1 class="my-5">Edit Skill</h1>
        <form action="/updateSkill/{{$show->id}}" method="POST">
            @csrf
            <label for="">Skill</label>
            <input type="text" name="span" class="form-control" value="{{$show->span}}">
            <label for="">Explanation</label>
            <input type="text" name="para" class="form-control" value="{{$show->para}}">
            <label for="">Icon</label>
            <input type="text" name="icon" class="form-control" value="{{$show->icon}}">
            <button class="btn btn-info" type="submit">Update</button>
        </form>
    </div>
@endsection