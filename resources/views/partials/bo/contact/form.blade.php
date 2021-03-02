<div class="container my-5">
    <h1 class="mb-3">Modify Elements</h1>

    {{-- Div Error --}}
    @if ($errors->updateContact->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->updateContact->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- Div Error --}}

    <form action="/updateInfo" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" value="{{old('title') ? old('title') : $info[0]->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Street</label>
            <input type="text" class="form-control" name="address1" value="{{old('address1') ? old('address1') : $info[0]->address1}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" name="address2" value="{{old('address2') ? old('address2') : $info[0]->address2}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" class="form-control" name="address3" value="{{old('address3') ? old('address3') : $info[0]->address3}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="address4" value="{{old('address4') ? old('address4') : $info[0]->address4}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>