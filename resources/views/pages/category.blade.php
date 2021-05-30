@extends('default')

@section('title'){{ $category['title'] }} @endsection

@section('description')Extended SWAPI Client - {{ $category['description'] }} @endsection

@section('content')
    <!--BEGIN::Header-->
    <header class="bg-dark text-light bg-featured py-5" style="background-image: url('{{ asset('img/sw-ds-bg.jpg') }}')">
        <div class="container py-5">
            <div class="row py-5 gx-5 align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="fw-bolder">{{ $category['title'] }}</h1>
                        <p class="lead fw-normal text-white-50 mb-0">{{ $category['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END::Header-->
    <!--BEGIN::Page Content-->
    <section class="py-5">
        <div class="container px-3 my-5">
            <div class="row gx-5">
                @include($category['tableView'])
            </div>
        </div>
    </section>
    <!--END::Page Content-->
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    @include($category['scriptsView'])
@endsection
