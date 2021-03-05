<!-- ======= Portfolio Section ======= -->
<div id="portfolio" class="paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>{{$portfolio[0]->title}}</h2>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    @foreach ($genre as $item)
                        <li data-filter="{{$item->filter}}" class="filter-active">{{$item->title}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

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
    </div>

</div><!-- End Portfolio Section -->