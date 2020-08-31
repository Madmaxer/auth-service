<?php

namespace Test\Feature\v1;

use Test\TestCase;

class AuthTest extends TestCase
{
    public function testAuthValid(): void
    {
        $response = $this->json(
            'POST',
            '/api/v1/auth',
            ['email' => 'test@test.pl', 'password' => 'test'],
            $this->getHeaders()
        );
        $response->assertStatus(200);
        $this->assertObjectHasAttribute('token', \json_decode($response->getContent()));
    }

    public function testAuthInvalid(): void
    {
        $response = $this->json(
            'POST',
            '/api/v1/auth',
            ['email' => 'test@test.pl', 'password' => 'test1'],
            $this->getHeaders()
        );
        $response->assertStatus(403);
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }
}
