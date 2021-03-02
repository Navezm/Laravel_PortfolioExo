@extends('template.second')

@section('content_bo')
    <div class="container">
        <h1 class="my-5">Edit Link</h1>

        {{-- Div Error --}}
        @if ($errors->updateFooterLink->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->updateFooterLink->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Div Error --}}

        <form action="/updateFooterLink/{{$show->id}}" method="POST">
            @csrf
            <input type="text" name="icon" class="form-control" value="{{old('icon') ? old('icon') : $show->icon}}">
            <button class="btn btn-info" type="submit">Update</button>
        </form>
    </div>
@endsection