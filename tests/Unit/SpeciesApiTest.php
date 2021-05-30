<?php

namespace Tests\Unit;

use Tests\TestCase;

class SpeciesApiTest extends TestCase
{
    public function testSpeciesListedSuccessfully()
    {
        $this->json('GET', 'api/species', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificSpeciesRetrievedSuccessfully()
    {
        $this->json('GET', 'api/species/4', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
