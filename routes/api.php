<?php

use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\CharacterController;
use App\Http\Controllers\API\FilmController;
use App\Http\Controllers\API\PlanetController;
use App\Http\Controllers\API\SpeciesController;
use App\Http\Controllers\API\StarshipController;
use App\Http\Controllers\API\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::middleware('api')->group(function() {
    // Root
    Route::get('/', [ApiController::class, 'index'])->name('api.index');

    // Films
    Route::get('/films', [FilmController::class, 'index'])->name('api.films.index');
    Route::get('/films/schema', [FilmController::class, 'schema'])->name('api.films.schema');
    Route::get('/films/{id}', [FilmController::class, 'show'])->name('api.films.show');
    Route::get('/films/{id}/{subresourceName}', [FilmController::class, 'showSubresource'])->name('api.films.showSubresource');
    Route::get('/films/advanced-search', [FilmController::class, 'showByCondition'])->name('api.films.showByCondition');

    // People
    Route::get('/people', [CharacterController::class, 'index'])->name('api.people.index');
    Route::get('/people/schema', [CharacterController::class, 'schema'])->name('api.people.schema');
    Route::get('/people/{id}', [CharacterController::class, 'show'])->name('api.people.show');
    Route::get('/people/{id}/{subresourceName}', [CharacterController::class, 'showSubresource'])->name('api.people.showSubresource');
    Route::get('/people/advanced-search', [CharacterController::class, 'showByCondition'])->name('api.people.showByCondition');

    // Planets
    Route::get('/planets', [PlanetController::class, 'index'])->name('api.planets.index');
    Route::get('/planets/schema', [PlanetController::class, 'schema'])->name('api.planets.schema');
    Route::get('/planets/{id}', [PlanetController::class, 'show'])->name('api.planets.show');
    Route::get('/planets/{id}/{subresourceName}', [PlanetController::class, 'showSubresource'])->name('api.planets.showSubresource');
    Route::get('/planets/advanced-search', [PlanetController::class, 'showByCondition'])->name('api.planets.showByCondition');
    Route::get('/planets/created-after-12042014', [PlanetController::class, 'createdAfter12042014'])->name('api.planets.createdAfter12042014');

    // Species
    Route::get('/species', [SpeciesController::class, 'index'])->name('api.species.index');
    Route::get('/species/schema', [SpeciesController::class, 'schema'])->name('api.species.schema');
    Route::get('/species/{id}', [SpeciesController::class, 'show'])->name('api.species.show');
    Route::get('/species/{id}/{subresourceName}', [SpeciesController::class, 'showSubresource'])->name('api.species.showSubresource');
    Route::get('/species/advanced-search', [SpeciesController::class, 'showByCondition'])->name('api.species.showByCondition');

    // Starships
    Route::get('/starships', [StarshipController::class, 'index'])->name('api.starships.index');
    Route::get('/starships/schema', [StarshipController::class, 'schema'])->name('api.starships.schema');
    Route::get('/starships/{id}', [StarshipController::class, 'show'])->name('api.starships.show');
    Route::get('/starships/{id}/{subresourceName}', [StarshipController::class, 'showSubresource'])->name('api.starships.showSubresource');
    Route::get('/starships/advanced-search', [StarshipController::class, 'showByCondition'])->name('api.starships.showByCondition');
    Route::get('/starships/passengers-over-84000', [StarshipController::class, 'passengersOver84000'])->name('api.starships.passengersOver84000');

    // Vehicles
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('api.vehicles.index');
    Route::get('/vehicles/schema', [VehicleController::class, 'schema'])->name('api.vehicles.schema');
    Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('api.vehicles.show');
    Route::get('/vehicles/{id}/{subresourceName}', [VehicleController::class, 'showSubresource'])->name('api.vehicles.showSubresource');
    Route::get('/vehicles/advanced-search', [VehicleController::class, 'showByCondition'])->name('api.vehicles.showByCondition');

    /**
     * @hideFromAPIDocumentation
     */
    Route::fallback(function () {
        return response()->json(['message' => 'This resource was not found on SWAPI routes'], 404);
    });
});
