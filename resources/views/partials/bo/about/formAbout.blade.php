<div class="container my-5">
    <h1 class="mb-4">Modify Elements</h1>

    {{-- Div Error --}}
    @if ($errors->updateAbout->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->updateAbout->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- Div Error --}}

    <form action="/updateAbout" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>First Paragraph</label>
            <input type="text" name="p1" class="form-control" value="{{old('p1') ? old('p1') : $about->p1}}">
        </div>
        <div class="form-group">
            <label>Second Paragraph</label>
            <input type="text" name="p2" class="form-control" value="{{old('p2') ? old('p2') : $about->p2}}">
        </div>
        <div class="form-group">
            <label>Src</label>
            <input type="file" name="src" class="form-control">
        </div>
        <div class="form-group">
            <a class="btn btn-warning" href="/downloadAbout">Download Image</a>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>