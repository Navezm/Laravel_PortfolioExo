<h1 class="mb-3">Modify Project</h1>
<table class="table mb-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Project</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($project as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>
                <a class="btn btn-danger" href="/deleteProjectPortfolio/{{$item->id}}">Delete</a>
            </td>
            <td>
                <a class="btn btn-success" href="/editProjectPortfolio/{{$item->id}}">Edit</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>