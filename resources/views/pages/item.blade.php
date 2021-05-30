@extends('default')

@section('title'){{ $item['title'] }} @endsection

@section('description')Extended SWAPI Client - {{ $item['description'] }} @endsection

@section('content')
    <!--BEGIN::Header-->
    @if(array_key_exists('opening_crawl', $item))
    <header class="bg-dark text-light bg-featured py-5" style="background-image: url('{{ asset('img/sw-ds-bg.jpg') }}')">
        <div class="container px-5 px-md-0 py-0 py-md-5">
            <div class="row py-0 py-md-5 gx-5 align-items-center justify-content-center">
                <div class="col-12 animation">
                    <div class="star-wars">
                        <div class="crawl">
                            <div class="title">
                                <p>Episode {{ romanize(intval($film['episode_id'])) }}</p>
                                <h1>{{ $item['title'] }}</h1>
                            </div>
                            <p>{{ $item['opening_crawl'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6 after-animation d-none">
                    <div class="text-center text-warning">
                        <h3 class="mb-2">Episode {{ romanize(intval($film['episode_id'])) }}</h3>
                        <h1 class="fw-bolder text-uppercase mb-5">{{ $item['title'] }}</h1>
                        <p class="lead fw-normal mb-0">{{ $item['opening_crawl'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @else
    <header class="bg-dark text-light bg-featured py-5" style="background-image: url('{{ asset('img/sw-ds-bg.jpg') }}')">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="fw-bolder">{{ $item['title'] }}</h1>
                        <p class="lead fw-normal text-white-50 mb-0">{{ $item['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @endif
    <!--END::Header-->
    @include($item['view'])
    <!--BEGIN::Page Content-->
    <section class="py-5">
        <div class="container text-center px-3 my-5">
            <h2 class="display-4 fw-bolder mb-2"><a class="link-dark text-decoration-none" href="{{ route('categories.'.$item['parent'].'.index') }}">&laquo; Go back</a></h2>
        </div>
    </section>
    <!--END::Page Content-->
@endsection

@section('scripts')
    @include($item['scriptsView'])
@endsection
