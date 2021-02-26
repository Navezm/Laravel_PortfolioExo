<!-- ======= Navbar ======= -->
<nav id="main-nav">
    <div class="row">
        <div class="container">

        <div class="logo">
            <a href="#hero" class="smoothScroll"><img src="{{asset($logo[0]->logo)}}" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
            @foreach ($navLink as $item)
                <li><a href="#{{$item->link}}" class="smoothScroll text-capitalize">{{$item->link}}</a></li>
            @endforeach
        </ul>

        </div>
    </div>
</nav><!-- End Navbar -->