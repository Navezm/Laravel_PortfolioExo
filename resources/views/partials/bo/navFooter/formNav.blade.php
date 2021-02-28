<div class="container my-5">
    <h1 class="mb-4">Modify Logo</h1>
    <form action="/updateLogo" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Logo</label>
            <input type="text" name="p1" class="form-control" value="{{$logo[0]->logo}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <h1 class="my-4">Modify Nav</h1>
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
          @foreach ($navLink as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->link}}</td>
              <td>
                <a class="btn btn-danger" href="/deleteNavLink/{{$item->id}}">Delete</a>
              </td>
              <td>
                <a class="btn btn-success" href="/editNavLink/{{$item->id}}">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <h1 class="mb-4">New Nav Link</h1>
    <form action="/createNavLink" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nav Link</label>
            <input type="text" name="link" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>