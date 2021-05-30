<?php

namespace Tests\Unit;

use Tests\TestCase;

class VehicleApiTest extends TestCase
{
    public function testVehiclesListedSuccessfully()
    {
        $this->json('GET', 'api/vehicles', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificVehicleRetrievedSuccessfully()
    {
        $this->json('GET', 'api/vehicles/4', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificVehicleNotFound()
    {
        $this->json('GET', 'api/vehicles/1', ['Accept' => 'application/json'])
            ->assertStatus(404);
    }
}
