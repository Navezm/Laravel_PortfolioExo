<div class="container my-5">
    <h1 class="mb-3">Create Project</h1>

    {{-- Div Error --}}
    @if ($errors->storeProject->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->storeProject->all() as $error)
                     <li>{{$error}}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     {{-- Div Error --}}

    <form action="/createProjectPortfolio" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Project Title</label>
          <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="p" value="{{old('p')}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="src">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>