<div class="container my-5">
    <h1 class="mb-3">Modify Title</h1>
    <form action="/updateTitlePortfolio" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" value="{{$portfolio[0]->title}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>