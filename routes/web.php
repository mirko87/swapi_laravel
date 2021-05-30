<?php

use App\Http\Controllers\Frontend\CharacterController;
use App\Http\Controllers\Frontend\FilmController;
use App\Http\Controllers\Frontend\PlanetController;
use App\Http\Controllers\Frontend\SpeciesController;
use App\Http\Controllers\Frontend\StarshipController;
use App\Http\Controllers\Frontend\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::prefix('categories')->name('categories.')->group(function () {
    // Films
    Route::get('/films', [FilmController::class, 'index'])->name('films.index');
    Route::get('/films/{id}', [FilmController::class, 'show'])->name('films.show');
    Route::get('/films/{id}/{subresourceName}', [FilmController::class, 'showSubresource'])->name('films.showSubresource');
    Route::post('/films/fetch', [FilmController::class, 'fetch'])->name('films.fetch');
    Route::post('/films/fetchSubresource', [FilmController::class, 'fetchSubresource'])->name('films.fetchSubresource');

    // Characters
    Route::get('/people', [CharacterController::class, 'index'])->name('people.index');
    Route::get('/people/{id}', [CharacterController::class, 'show'])->name('people.show');
    Route::get('/people/{id}/{subresourceName}', [CharacterController::class, 'showSubresource'])->name('people.showSubresource');
    Route::post('/people/fetch', [CharacterController::class, 'fetch'])->name('people.fetch');
    Route::post('/people/fetchSubresource', [CharacterController::class, 'fetchSubresource'])->name('people.fetchSubresource');

    // Planets
    Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
    Route::get('/planets/{id}', [PlanetController::class, 'show'])->name('planets.show');
    Route::get('/planets/{id}/{subresourceName}', [PlanetController::class, 'showSubresource'])->name('planets.showSubresource');
    Route::post('/planets/fetch', [PlanetController::class, 'fetch'])->name('planets.fetch');
    Route::post('/planets/fetchSubresource', [PlanetController::class, 'fetchSubresource'])->name('planets.fetchSubresource');

    // Starships
    Route::get('/starships', [StarshipController::class, 'index'])->name('starships.index');
    Route::get('/starships/{id}', [StarshipController::class, 'show'])->name('starships.show');
    Route::get('/starships/{id}/{subresourceName}', [StarshipController::class, 'showSubresource'])->name('starships.showSubresource');
    Route::post('/starships/fetch', [StarshipController::class, 'fetch'])->name('starships.fetch');
    Route::post('/starships/fetchSubresource', [StarshipController::class, 'fetchSubresource'])->name('starships.fetchSubresource');

    // Vehicles
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('vehicles.show');
    Route::get('/vehicles/{id}/{subresourceName}', [VehicleController::class, 'showSubresource'])->name('vehicles.showSubresource');
    Route::post('/vehicles/fetch', [VehicleController::class, 'fetch'])->name('vehicles.fetch');
    Route::post('/vehicles/fetchSubresource', [VehicleController::class, 'fetchSubresource'])->name('vehicles.fetchSubresource');

    // Species
    Route::get('/species', [SpeciesController::class, 'index'])->name('species.index');
    Route::get('/species/{id}', [SpeciesController::class, 'show'])->name('species.show');
    Route::get('/species/{id}/{subresourceName}', [SpeciesController::class, 'showSubresource'])->name('species.showSubresource');
    Route::post('/species/fetch', [SpeciesController::class, 'fetch'])->name('species.fetch');
    Route::post('/species/fetchSubresource', [SpeciesController::class, 'fetchSubresource'])->name('species.fetchSubresource');
});

/**
 * @hideFromAPIDocumentation
 */
Route::fallback(function() {
    abort(404);
});
