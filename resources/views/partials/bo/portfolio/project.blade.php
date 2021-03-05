<div class="row portfolio-container">
    @foreach ($project as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->p}}">
            <img src="{{str_contains($item->src, 'img') ? asset($item->src) : asset('storage/img/'.$item->src)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>{{$item->title}}</h4>
                <p class="text-capitalize">{{$item->p}}</p>
                <a href="{{str_contains($item->src, 'img') ? asset($item->src) : asset('storage/img/'.$item->src)}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$item->title}}"><i class="bx bx-plus"></i></a>
            </div>
        </div>
    @endforeach
</div>