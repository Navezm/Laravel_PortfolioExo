<!-- ======= Navbar ======= -->
<nav id="main-nav">
    <div class="row">
        <div class="container">

        <div class="logo">
            <a href="{{route('home')}}" class="smoothScroll"><img src="{{asset($logo[0]->logo)}}" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
            @foreach ($navLink as $item)
            @if ($loop->iteration == 1)
                <li><a href="#hero" class="smoothScroll text-capitalize">{{$item->link}}</a></li>
            @else
                <li><a href="#{{$item->link}}" class="smoothScroll text-capitalize">{{$item->link}}</a></li>
            @endif
            @endforeach
        </ul>

        </div>
    </div>
</nav><!-- End Navbar -->