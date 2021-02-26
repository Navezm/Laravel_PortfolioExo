<!-- ======= Services Section ======= -->
<div id="services">
    <div class="container">

      <div class="services-carousel owl-theme">

        @foreach ($skill as $item)
          <div class="services-block">

            <i class="{{$item->icon}}"></i>
            <span>{{$item->span}}</span>
            <p class="separator">{{$item->para}}</p>

          </div>
        @endforeach

      </div>

    </div>

</div><!-- End Services Section -->