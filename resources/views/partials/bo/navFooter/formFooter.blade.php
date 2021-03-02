<div class="container my-5">
    <h1 class="mb-4">Modify Static Elements</h1>
    <form action="/updateFooter" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Copyright</label>
            <input type="text" name="p1" class="form-control" value="{{$footer[0]->p1}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Made By</label>
            <input type="text" name="p2" class="form-control" value="{{$footer[0]->p2}}">
            <small>The "/" character serve to split the data in this input.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Website</label>
            <input type="text" name="link" class="form-control" value="{{$footer[0]->link}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <h1 class="my-4">Modify Social Link Elements</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Link</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($footerLink as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->icon}}</td>
              <td>
                <a class="btn btn-danger" href="/deleteFooterLink/{{$item->id}}">Delete</a>
              </td>
              <td>
                <a class="btn btn-success" href="/editFooterLink/{{$item->id}}">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <h1 class="my-4">Create new Social Link</h1>
    <form action="/createFooterLink" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Social Link</label>
          <input type="text" name="icon" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>