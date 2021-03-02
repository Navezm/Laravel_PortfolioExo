<h1 class="mb-3">Modify Filter</h1>
<table class="table mb-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Filter</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($genre as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>
                <a class="btn btn-danger" href="/deleteGenrePortfolio/{{$item->id}}">Delete</a>
            </td>
            <td>
                <a class="btn btn-success" href="/editGenrePortfolio/{{$item->id}}">Edit</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>