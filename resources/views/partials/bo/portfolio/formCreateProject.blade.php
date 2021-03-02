<div class="container my-5">
    <h1 class="mb-3">Create Project</h1>
    <form action="/createProjectPortfolio" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Project Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="p">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Image Link</label>
            <input type="text" class="form-control" name="src">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>