<?php

namespace Tests\Unit;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function testApiBaseListedSuccessfully()
    {
        $this->json('GET', 'api/', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
