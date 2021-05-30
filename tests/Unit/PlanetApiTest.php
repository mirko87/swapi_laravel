<?php

namespace Tests\Unit;

use Tests\TestCase;

class PlanetApiTest extends TestCase
{
    public function testPlanetsListedSuccessfully()
    {
        $this->json('GET', 'api/planets', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificPlanetRetrievedSuccessfully()
    {
        $this->json('GET', 'api/planets/5', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testPlanetsCreatedAfterDateRetrievedSuccessfully()
    {
        $this->json('GET', 'api/planets/created-after-12042014', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
