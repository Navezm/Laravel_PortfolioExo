<div class="container my-5">
  <h1 class="mb-4">Modify Elements</h1>
  <form action="/updateHero" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Main title</label>
      <input type="text" name="title" class="form-control" value="{{$hero->title}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jobs</label>
      <input type="text" name="job" class="form-control" value="{{$hero->job}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Data Type</label>
      <input type="text" name="dataType" class="form-control" value="{{$hero->dataType}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>

  <h1 class="my-4">Adding A Social Link</h1>
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
      @foreach ($heroLink as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->link}}</td>
          <td>
            <a class="btn btn-danger" href="/deleteHeroLink/{{$item->id}}">Delete</a>
          </td>
          <td>
            <a class="btn btn-success" href="/editHeroLink/{{$item->id}}">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <form action="/createHeroLink" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Social Link</label>
      <input type="text" name="link" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>