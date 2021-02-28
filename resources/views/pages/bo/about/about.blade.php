@extends('template.second')

@section('content_bo')
    @include('partials.bo.about.about')
    @include('partials.bo.about.formAbout')
    @include('partials.bo.about.service')
    @include('partials.bo.about.formService')
@endsection