<div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            @foreach ($genre as $item)
                <li data-filter="{{$item->filter}}" class="filter-active">{{$item->title}}</li>
            @endforeach
        </ul>
    </div>
</div>