@extends('template.second')

@section('content_bo')
    <div class="container">
        <h1 class="my-5">Edit Skill</h1>

        {{-- Div Error --}}
        @if ($errors->updateSkill->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->updateSkill->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Div Error --}}

        <form action="/updateSkill/{{$show->id}}" method="POST">
            @csrf
            <label for="">Skill</label>
            <input type="text" name="span" class="form-control" value="{{old('span') ? old('span') : $show->span}}">
            <label for="">Explanation</label>
            <input type="text" name="para" class="form-control" value="{{old('para') ? old('para') : $show->para}}">
            <label for="">Icon</label>
            <input type="text" name="icon" class="form-control" value="{{old('icon') ? old('icon') : $show->icon}}">
            <button class="btn btn-info" type="submit">Update</button>
        </form>
    </div>
@endsection