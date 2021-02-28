<div class="container my-5">
    <h1 class="mb-4">Modify Elements</h1>
    <form action="/updateAbout" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">First Paragraph</label>
        <input type="text" name="p1" class="form-control" value="{{$about->p1}}">
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Second Paragraph</label>
        <input type="text" name="p2" class="form-control" value={{$about->p2}}>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Src</label>
        <input type="text" name="src" class="form-control" value={{$about->src}}>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>