<!-- ======= Hero Section ======= -->
<div id="hero" class="home">
    <div class="container">
        <div class="hero-content">
            <h1>{{$hero->title}} <span class="typed"></span></h1>
            <p class="typed-items" data-typed-person="{{$hero->dataType}}">{{$hero->job}}</p>

            <ul class="list-unstyled list-social">
                @foreach ($heroLink as $item)
                    <li><a href="#"><i class="{{$item->link}}"></i></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- End Hero -->