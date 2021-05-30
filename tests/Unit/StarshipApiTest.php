<?php

namespace Tests\Unit;

use Tests\TestCase;

class StarshipApiTest extends TestCase
{
    public function testStarshipsListedSuccessfully()
    {
        $this->json('GET', 'api/starships', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificStarshipRetrievedSuccessfully()
    {
        $this->json('GET', 'api/starships/9', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testStarshipsWithOverSpecificPassengersRetrievedSuccessfully()
    {
        $this->json('GET', 'api/starships/passengers-over-84000', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
