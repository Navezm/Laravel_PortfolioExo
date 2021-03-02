@extends('template.second')

@section('content_bo')
<div id="portfolio" class="paddsection">
    @include('partials.bo.portfolio.title')
    @include('partials.bo.portfolio.formTitle')
    <div class="container">
        @include('partials.bo.portfolio.filter')
        @include('partials.bo.portfolio.tableFilter')
        @include('partials.bo.portfolio.formCreateFilter')
        @include('partials.bo.portfolio.project')
        @include('partials.bo.portfolio.tableProject')
        @include('partials.bo.portfolio.formCreateProject')
    </div>
</div>
@endsection