@extends('template.second')

@section('content_bo')
<h1 class="text-center">Footer</h1>
    @include('partials.bo.navFooter.footer')
    @include('partials.bo.navFooter.formFooter')
<h1 class="text-center">NavBar</h1>
    @include('partials.bo.navFooter.nav')
    @include('partials.bo.navFooter.formNav')
@endsection