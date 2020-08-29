<?php

namespace Test\Feature\v1;

use Test\TestCase;

class AuthTest extends TestCase
{
    public function testHealth(): void
    {
        $response = $this->post('/api/v1/auth', ['email' => 'test@test.pl', 'password' => 'test']);
        $response->assertStatus(200);
        $this->assertSame($response->getContent(), \json_encode(['example']));
    }
}
