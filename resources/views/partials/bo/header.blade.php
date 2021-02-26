<div id="main-nav">
    <div class="row">
        <div class="container">

        <div class="logo">
            <a href="/" class="smoothScroll"><img src="{{asset($logo[0]->logo)}}" alt="logo"></a>
        </div>

            <ul class="nav-menu list-unstyled d-flex">
                @foreach ($navLink as $item)
                    <li class="mx-2"><a href="/bo/{{$item->link}}" class="smoothScroll text-capitalize">{{$item->link}}</a></li>
                @endforeach
            </ul>

        </div>
    </div>
</div>

