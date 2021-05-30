<?php

namespace Tests\Unit;

use Tests\TestCase;

class CharacterApiTest extends TestCase
{
    public function testCharactersListedSuccessfully()
    {
        $this->json('GET', 'api/people', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificCharacterRetrievedSuccessfully()
    {
        $this->json('GET', 'api/people/1', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testSpecificCharacterSubresourceRetrievedSuccessfully()
    {
        $this->json('GET', 'api/people/1/films', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
