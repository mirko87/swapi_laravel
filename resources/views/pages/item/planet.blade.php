<!--BEGIN::Page Content-->
<section class="py-5">
    <div class="container px-3 my-5">
        <div class="row gx-5">
            <div class="col mb-0">
                <div class="table-responsive rounded-3">
                    <table class="table table-dark table-striped table-hover mb-0">
                        <thead>
                        <tr>
                            <th>Diameter</th>
                            <th>Rotation Period</th>
                            <th>Orbital Period</th>
                            <th>Gravity</th>
                            <th>Population</th>
                            <th>Climate</th>
                            <th>Terrain</th>
                            <th>Surface Water</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $planet['diameter'] }}</td>
                            <td>{{ $planet['rotation_period'] }}</td>
                            <td>{{ $planet['orbital_period'] }}</td>
                            <td>{{ $planet['gravity'] }}</td>
                            <td>{{ $planet['population'] }}</td>
                            <td>{{ $planet['climate'] }}</td>
                            <td>{{ $planet['terrain'] }}</td>
                            <td>{{ $planet['surface_water'] }}</td>
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
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="films" data-ids="{{ json_encode($planet['films']) }}" data-relation="films">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-characters.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#residents" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Residents</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="residents" data-ids="{{ json_encode($planet['residents']) }}" data-relation="people">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END::Page Content-->
