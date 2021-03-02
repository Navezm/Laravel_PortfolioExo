@extends('template.second')

@section('content_bo')
<div class="container">
    <h1 class="my-5">Edit Genre</h1>

    {{-- Div Error --}}
    @if ($errors->updateGenre->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->updateGenre->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- Div Error --}}

    <form action="/updateGenrePortfolio/{{$show->id}}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" value="{{old('title') ? old('title') : $show->title}}">
        <label for="">Filter</label>
        <input type="text" name="filter" class="form-control" value="{{old('filter') ? old('filter') : $show->filter}}">
        <button class="btn btn-info" type="submit">Update</button>
    </form>
</div>
@endsection