<div class="container my-5">
    <h1 class="mb-4">Modify Elements</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($skill as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->span}}</td>
                <td>
                    <a class="btn btn-danger" href="/deleteSkill/{{$item->id}}">Delete</a>
                </td>
                <td>
                    <a class="btn btn-success" href="/editSkill/{{$item->id}}">Edit</a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>

    {{-- Div Error --}}
    @if ($errors->createSkill->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->createSkill->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
    {{-- Div Error --}}

    <form action="/createSkill" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Icon</label>
        <input type="text" name="icon" class="form-control" value="{{old('icon')}}">
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Skill Name</label>
        <input type="text" name="span" class="form-control" value="{{old('span')}}">
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Explanation</label>
        <input type="text" name="para" class="form-control" value="{{old('para')}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>