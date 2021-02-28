<!-- ======= Services Section ======= -->
<div id="services" class="p-0 py-5">
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