<!-- ======= About Section ======= -->
<div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="{{str_contains($about[0]->src, 'img') ? asset($about[0]->src) : asset('storage/img/'.$about[0]->src)}}" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading">{{$about[0]->p1}}</p>
            <p class="separator">{{$about[0]->p2}}</p>

          </div>
        </div>
      </div>
    </div>
</div>
<!-- End About Section -->