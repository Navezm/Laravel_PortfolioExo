<div class="container my-5">
    <h1 class="mb-3">Create Filter</h1>

    {{-- Div Error --}}
    @if ($errors->storeFilter->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->storeFilter->all() as $error)
                     <li>{{$error}}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     {{-- Div Error --}}

    <form action="/createFilterPortfolio" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Filter name</label>
          <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Filter data</label>
            <input type="text" class="form-control" name="filter" value=".filter-">
            <small>Put the data filter you want after the pre-save value</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>