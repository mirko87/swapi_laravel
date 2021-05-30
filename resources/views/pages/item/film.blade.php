<!--BEGIN::Page Content-->
<section class="py-5">
    <div class="container px-3 my-5">
        <div class="row gx-5 row-cols-1 row-cols-md-3 justify-content-center">
            <div class="col mb-5 mb-md-0">
                <div class="text-center">
                    <h5 class="fw-bolder">{{ $film['director'] }}</h5>
                    <div class="fst-italic text-muted">Director</div>
                </div>
            </div>
            <div class="col mb-5 mb-md-0">
                <div class="text-center">
                    <h5 class="fw-bolder">{{ $film['producer'] }}</h5>
                    <div class="fst-italic text-muted">Producer(s)</div>
                </div>
            </div>
            <div class="col mb-0">
                <div class="text-center">
                    <h5 class="fw-bolder">{{ Carbon\Carbon::parse($film['release_date'])->format('m/d/Y') }}</h5>
                    <div class="fst-italic text-muted">Release Date</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END::Page Content-->
<!--BEGIN::Page Content-->
<section class="bg-secondary text-white py-5">
    <div class="container px-3 my-5">
        <div class="row gx-5 row-cols-1 row-cols-md-3 justify-content-center">
            <div class="col mb-5 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-characters.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#characters" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Characters</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="characters" data-ids="{{ json_encode($film['characters']) }}" data-relation="people">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-5 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-planets.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#planets" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Planets</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="planets" data-ids="{{ json_encode($film['planets']) }}" data-relation="planets">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-5 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-starships.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#starships" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Starships</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="starships" data-ids="{{ json_encode($film['starships']) }}" data-relation="starships">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-5 mb-md-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-vehicles.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#vehicles" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Vehicles</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="vehicles" data-ids="{{ json_encode($film['vehicles']) }}" data-relation="vehicles">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-species.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#species" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Species</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="species" data-ids="{{ json_encode($film['species']) }}" data-relation="species">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END::Page Content-->
