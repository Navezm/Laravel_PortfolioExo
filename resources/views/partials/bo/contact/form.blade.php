<div class="container my-5">
    <h1 class="mb-3">Modify Elements</h1>
    <form action="/updateInfo" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" value="{{$info[0]->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Street</label>
            <input type="text" class="form-control" name="address1" value="{{$info[0]->address1}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" name="address2" value="{{$info[0]->address2}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" class="form-control" name="address3" value="{{$info[0]->address3}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="address4" value="{{$info[0]->address4}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>