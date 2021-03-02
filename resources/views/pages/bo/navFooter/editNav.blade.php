@extends('template.second')

@section('content_bo')
    <div class="container">
        <h1 class="my-5">Edit Link</h1>

        {{-- Div Error --}}
        @if ($errors->updateNav->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->updateNav->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Div Error --}}

        <form action="/updateNavLink/{{$show->id}}" method="POST">
            @csrf
            <input type="text" name="link" class="form-control" value="{{old('link') ? old('link') : $show->link}}">
            <button class="btn btn-info" type="submit">Update</button>
        </form>
    </div>
@endsection