@extends('template.main')

@section('content')
    @include('partials.hero')
    <main id="main">
        @include('partials.about')
        @include('partials.service')
        @include('partials.portfolio')
        @include('partials.contact')
    </main>
@endsection