<!-- ======= Footer ======= -->
<div id="footer" class="text-center">
    <div class="container">
        <div class="socials-media text-center">

            <ul class="list-unstyled">
                @foreach ($footerLink as $item)
                    <li><a href="#"><i class="{{$item->icon}}"></i></a></li>
                @endforeach
            </ul>

        </div>

        <p>{{$footer[0]->p1}}</p>

        <div class="credits">
            {{$paragraph1[0]}}<a href="{{$footer[0]->link}}">{{$paragraph1[1]}}</a>
        </div>

    </div>
</div><!-- End Footer -->