<!--BEGIN::Page Content-->
<section class="py-5">
    <div class="container px-3 my-5">
        <div class="row gx-5 row-cols-1 row-cols-md-3 justify-content-center">
            <div class="col mb-5 mb-md-0 h-100">
                <div class="table-responsive rounded-3">
                    <table class="table table-dark table-striped table-hover mb-0">
                        <tbody>
                        <tr>
                            <th>Height</th>
                            <td>{{ $character['height'] }}</td>
                        </tr>
                        <tr>
                            <th>Mass</th>
                            <td>{{ $character['mass'] }}</td>
                        </tr>
                        <tr>
                            <th>Hair color</th>
                            <td>{{ $character['hair_color'] }}</td>
                        </tr>
                        <tr>
                            <th>Skin color</th>
                            <td>{{ $character['skin_color'] }}</td>
                        </tr>
                        <tr>
                            <th>Eye color</th>
                            <td>{{ $character['eye_color'] }}</td>
                        </tr>
                        <tr>
                            <th>Birth Year</th>
                            <td>{{ $character['birth_year'] }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $character['gender'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-5 mb-md-0 h-100">
                <div class="text-center">
                    <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-planets.jpg') }}')"></div>
                    <h5 class="fw-bolder">{!! $character['homeworld'] !!}</h5>
                    <div class="fst-italic text-muted">Home Planet</div>
                </div>
            </div>
            <div class="col mb-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-species.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#species" class="fetch link-dark" aria-expanded="false" aria-controls="collapseExample">Species</a>
                </h5>
                <span class="small fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="species" data-ids="{{ json_encode($character['species']) }}" data-relation="species">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
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
            <div class="col mb-5 mb-md-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-films.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#films" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Films</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="films" data-ids="{{ json_encode($character['films']) }}" data-relation="films">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-5 mb-md-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-starships.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#starships" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Starships</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="starships" data-ids="{{ json_encode($character['starships']) }}" data-relation="starships">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-vehicles.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#vehicles" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Vehicles</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="vehicles" data-ids="{{ json_encode($character['vehicles']) }}" data-relation="vehicles">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END::Page Content-->
