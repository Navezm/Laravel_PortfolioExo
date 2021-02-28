<div>
    <div class="row">
        <div class="container">

        <div class="logo">
            <a href="/" class="smoothScroll"><img src="{{asset($logo[0]->logo)}}" alt="logo"></a>
        </div>

            <ul class="nav-menu list-unstyled d-flex p-0 h-100 d-flex align-items-center">
                @foreach ($navLink as $item)
                    <li class="mx-2"><a href="/bo/{{$item->link}}" class="smoothScroll text-capitalize">{{$item->link}}</a></li>
                @endforeach
                <li class="mx-2"><a href="/bo/navfooter" class="smoothScroll text-capitalize">NavFooter</a></li>
            </ul>

        </div>
    </div>
</div>

