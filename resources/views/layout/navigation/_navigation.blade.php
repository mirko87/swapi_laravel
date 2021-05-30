<!--BEGIN::Navigation-->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container px-3">
        <a class="navbar-brand" href="{{ route('home') }}"><img class="d-flex" src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-1"><a class="nav-link{{ Route::current()->getName() === 'home' ? ' active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item mx-1 dropdown">
                    <a class="nav-link dropdown-toggle{{ Route::current()->getPrefix() === '/categories' ? ' active' : '' }}" id="navbarDropdownCategories" href="javascript:" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdownCategories">
                        <li><a class="dropdown-item{{ str_contains(Route::current()->getName(), 'categories.films') ? ' active' : '' }}" href="{{ route('categories.films.index') }}">Films</a></li>
                        <li><a class="dropdown-item{{ str_contains(Route::current()->getName(), 'categories.people') ? ' active' : '' }}" href="{{ route('categories.people.index') }}">Characters</a></li>
                        <li><a class="dropdown-item{{ str_contains(Route::current()->getName(), 'categories.planets') ? ' active' : '' }}" href="{{ route('categories.planets.index') }}">Planets</a></li>
                        <li><a class="dropdown-item{{ str_contains(Route::current()->getName(), 'categories.starships') ? ' active' : '' }}" href="{{ route('categories.starships.index') }}">Starships</a></li>
                        <li><a class="dropdown-item{{ str_contains(Route::current()->getName(), 'categories.vehicles') ? ' active' : '' }}" href="{{ route('categories.vehicles.index') }}">Vehicles</a></li>
                        <li><a class="dropdown-item{{ str_contains(Route::current()->getName(), 'categories.species') ? ' active' : '' }}" href="{{ route('categories.species.index') }}">Species</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-1"><a class="nav-link" href="{{ route('scribe') }}">API Docs</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--END::Navigation-->
