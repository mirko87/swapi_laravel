@extends('default')

@section('title')Home @endsection

@section('description')Extended SWAPI Client - All Star Wars data you've ever wanted: Films, Characters, Planets, Starships, Vehicles and Species. @endsection

@section('content')
    <!--BEGIN::Header-->
    <header class="bg-dark bg-featured py-5" style="background-image: url('{{ asset('img/sw-ds-bg.jpg') }}')">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Extended SWAPI Client</h1>
                        <p class="lead fw-normal text-light mb-2">All Star Wars data you've ever wanted:<br><strong>Films, Characters, Planets, Starships, Vehicles and Species.</strong></p>
                        <p class="fw-normal text-light mb-4">API includes data from original saga (6 films). Data provided by <a class="link-light link" href="{{ config('swapi.source_url') }}" target="_blank">{{ config('swapi.source_url') }}</a>.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-warning btn-lg px-4 me-sm-3" href="#api">Get Started</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="{{ route('scribe') }}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('img/swapi.png') }}" alt="..." /></div>
            </div>
        </div>
    </header>
    <!--END::Header-->
    <!--BEGIN::Call to action-->
    <section class="py-5 bg-light" id="api">
        <div class="container text-center px-5 my-5">
            <h2 class="display-4 fw-bolder mb-2">Try our API now:</h2>
        </div>
    </section>
    <!--END::Call to action-->
    <!--BEGIN::Page Content 2-->
    <section class="py-5">
        <div class="container px-3 px-md-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-secondary text-light border-0 pe-2" id="api-url">{{ config('app.url') }}/api/</span>
                        <input type="text" class="form-control px-2" id="api-request" aria-describedby="api-url" placeholder="films/1/">
                        <button class="btn btn-secondary" type="button" id="button-request">
                            <span class="spinner-border spinner-border-sm d-none spinner" role="status" aria-hidden="true"></span>
                            Request
                        </button>
                    </div>
                    <span class="form-text text-muted">Hint: type <span class="fw-bolder">films/1/</span> or <span class="fw-bolder">people/3/</span> or <span class="fw-bolder">starships/9/</span></span>
                    <div class="d-flex mt-4 justify-content-center">
                        <button class="btn btn-warning fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#differences" aria-expanded="false" aria-controls="differences">Differences from original SWAPI</button>
                    </div>
                    <div class="collapse mt-4" id="differences">
                        <div class="card card-body bg-secondary text-light">
                            <p class="fw-normal">Difference from original SWAPI is that few new endpoints are added:</p>
                            <ul>
                                <li>After any specific resource you can add its subresource. Purpose: To display data for all subresource of given resource<br>
                                    Example:
                                    <ul class="mb-2">
                                        <li><strong>people/1/films/</strong></li>
                                    </ul>
                                </li>
                                <li>Advanced search by condition (attribute, operator, condition, type)<br>
                                    Example:
                                    <ul class="mb-2">
                                        <li><strong>films/advanced-search?attribute=director&operator==&condition=George Lucas&type=string</strong><br>
                                            <a href="{{ route('scribe') }}" class="text-warning">Check API docs for explanation.</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>Specific endpoint - Planets created after 12/04/2014: <strong>planets/created-after-12042014/</strong></li>
                                <li>Specific endpoint - Starships with over 84000 passengers: <strong>starships/passengers-over-84000/</strong></li>
                            </ul>
                        </div>
                    </div>
                    <p class="lead text-dark fs-3 pt-4">Result:</p>
                    <div class="card card-body bg-dark p-3">
                        <pre id="request-output" class="text-light mh-350px p-3 mb-0"></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END::Page Content 2-->
    <!--BEGIN::Call to action 2-->
    <section class="py-5 bg-dark text-light">
        <div class="container text-center px-5 my-5">
            <h2 class="display-4 fw-bolder mb-2">... or start by choosing one of the available categories:</h2>
        </div>
    </section>
    <!--END::Call to action 2-->
    <!--BEGIN::Page Content 2-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4">
                    <div class="position-relative img-hover mb-5">
                        <img class="img-fluid rounded-3 mb-3" src="{{ asset('img/star-wars-films.jpg') }}" alt="Star Wars Films" />
                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="{{ route('categories.films.index') }}">Films</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative img-hover mb-5">
                        <img class="img-fluid rounded-3 mb-3" src="{{ asset('img/star-wars-characters.jpg') }}" alt="Star Wars Characters" />
                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="{{ route('categories.people.index') }}">Characters</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative img-hover mb-5">
                        <img class="img-fluid rounded-3 mb-3" src="{{ asset('img/star-wars-planets.jpg') }}" alt="Star Wars Planets" />
                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="{{ route('categories.planets.index') }}">Planets</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative img-hover mb-5 mb-lg-0">
                        <img class="img-fluid rounded-3 mb-3" src="{{ asset('img/star-wars-starships.jpg') }}" alt="Star Wars Starships" />
                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="{{ route('categories.starships.index') }}">Starships</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative img-hover mb-5 mb-lg-0">
                        <img class="img-fluid rounded-3 mb-3" src="{{ asset('img/star-wars-vehicles.jpg') }}" alt="Star Wars Vehicles" />
                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="{{ route('categories.vehicles.index') }}">Vehicles</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative img-hover">
                        <img class="img-fluid rounded-3 mb-3" src="{{ asset('img/star-wars-species.jpg') }}" alt="Star Wars Species" />
                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="{{ route('categories.species.index') }}">Species</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END::Page Content 2-->
@endsection

@section('scripts')
    <script type="text/javascript">
        function apiRequest() {
            let content = $('#api-request').val()
            if(content === ''){
                content = 'films/1/';
            }
            let call_url = '{{ route('api.index')."/" }}' + content;
            $.ajax({
                dataType: 'json',
                url: call_url,
                context: document.body
            }).done(function(data) {
                $('#request-output').text(JSON.stringify(data, null, '\t'));
            }).fail(function(data) {
                $('#request-output').text(data.status + ' ' + data.statusText);
            }).always(function() {
                $('#button-request').prop('disabled', false);
                if(!$('.spinner').hasClass('d-none')) $('.spinner').addClass('d-none');
            });
        }

        jQuery(window).on('load', function () {
            apiRequest();
        });

        jQuery(document).ready(function() {
            $('#button-request').on('click', function (e) {
                e.preventDefault();
                $(this).prop('disabled', true);
                $('.spinner').removeClass('d-none');

                apiRequest();
            });
        });
    </script>
@endsection
