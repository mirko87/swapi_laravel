<?php

namespace Tests\Unit;

use Tests\TestCase;

class FilmApiTest extends TestCase
{
    public function testFilmsListedSuccessfully()
    {
        $this->json('GET', 'api/films', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificFilmRetrievedSuccessfully()
    {
        $this->json('GET', 'api/films/1', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
