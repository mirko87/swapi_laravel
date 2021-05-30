<!--BEGIN::Page Content-->
<section class="py-5">
    <div class="container px-3 my-5">
        <div class="row gx-5">
            <div class="col mb-0">
                <div class="table-responsive rounded-3">
                    <table class="table table-dark table-striped table-hover mb-0">
                        <thead>
                        <tr>
                            <th>Designation</th>
                            <th>Average height</th>
                            <th>Average lifespan </th>
                            <th>Eye colors</th>
                            <th>Hair colors</th>
                            <th>Skin colors</th>
                            <th>Language</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $species['designation'] }}</td>
                            <td>{{ $species['average_height'] }}</td>
                            <td>{{ $species['average_lifespan'] }}</td>
                            <td>{{ $species['eye_colors'] }}</td>
                            <td>{{ $species['hair_colors'] }}</td>
                            <td>{{ $species['skin_colors'] }}</td>
                            <td>{{ $species['language'] }}</td>
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
        <div class="row gx-5 row-cols-1 row-cols-md-3 justify-content-center">
            <div class="col mb-5 mb-md-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-films.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#films" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">Films</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="films" data-ids="{{ json_encode($species['films']) }}" data-relation="films">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-5 mb-md-0 h-100 text-center">
                <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-characters.jpg') }}')"></div>
                <h5 class="mb-0 fw-bolder">
                    <a role="button" data-bs-toggle="collapse" href="#people" class="fetch link-light" aria-expanded="false" aria-controls="collapseExample">People</a>
                </h5>
                <span class="small text-light fst-italic">(Click to load)</span>
                <div class="d-flex flex-wrap justify-content-center collapse mt-3" id="people" data-ids="{{ json_encode($species['people']) }}" data-relation="people">
                    <span class="loader d-none"><span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span> Loading...</span>
                    <div class="items"></div>
                </div>
            </div>
            <div class="col mb-0 h-100">
                <div class="text-center">
                    <div class="bg-image-feature rounded-circle mb-4 px-4" style="background-image: url('{{ asset('img/star-wars-planets.jpg') }}')"></div>
                    <h5 class="fw-bolder">{!! $species['homeworld'] !!}</h5>
                    <div class="fst-italic">Home Planet</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END::Page Content-->
