<div class="container my-5">
    <h1 class="mb-3">Modify Title</h1>

    {{-- Div Error --}}
    @if ($errors->updateTitle->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->updateTitle->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
          </ul>
      </div>
    @endif
    {{-- Div Error --}}

    <form action="/updateTitlePortfolio" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" value="{{old('title') ? old('title') : $portfolio[0]->title}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>