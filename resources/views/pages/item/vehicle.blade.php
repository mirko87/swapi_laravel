<!--BEGIN::Page Content-->
<section class="py-5">
    <div class="container px-3 my-5">
        <div class="row gx-5">
            <div class="col mb-0">
                <div class="table-responsive rounded-3">
                    <table class="table table-dark table-striped table-hover mb-0">
                        <thead>
                        <tr>
                            <th>Vehicle Class</th>
                            <th>Manufacturer</th>
                            <th>Length</th>
                            <th>Cost (Credits)</th>
                            <th>Crew</th>
                            <th>Passengers</th>
                            <th>Max Atmos. Speed</th>
                            <th>Cargo Cap.</th>
                            <th>Consumables</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $vehicle['vehicle_class'] }}</td>
                            <td>{{ $vehicle['manufacturer'] }}</td>
                            <td>{{ $vehicle['length'] }}</td>
                            <td>{{ $vehicle['cost_in_credits'] }}</td>
                            <td>{{ $vehicle['crew'] }}</td>
                            <td>{{ $vehicle['passengers'] }}</td>
                            <td>{{ $vehicle['max_atmosphering_speed'] }}</td>
                            <td>{{ $vehicle['cargo_capacity'] }}</td>
                            <td>{{ $vehicle['consumables'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END::Page Content-->
<!--BEGIN::Page Content-->
<section class="bg-secondary text-white py-5">
    <div class="container px-3 my-5">
        <div class="row gx-5 row-cols-1 row-cols-md-2 justify-content-center">
            <div class="col mb-5 mb-md-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-films.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#films" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Films</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="films" data-ids="{{ json_encode($vehicle['films']) }}" data-relation="films">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-characters.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#pilots" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Pilots</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="pilots" data-ids="{{ json_encode($vehicle['pilots']) }}" data-relation="people">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END::Page Content-->
