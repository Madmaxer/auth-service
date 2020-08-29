<?php

namespace App\Helpers;

use Jwt\Enum\Algorithm;
use Jwt\JwtFactory;

class Generator
{
    /**
     * @var string
     */
    private $privateKeyPath;

    /**
     * @param string $privateKeyPath
     */
    public function __construct(string $privateKeyPath)
    {
        $this->privateKeyPath = $privateKeyPath;
    }

    /**
     * @param array  $payload
     * @param int    $expirationSeconds
     * @param string $issuer
     *
     * @return string
     * @throws \Exception
     */
    public function generateJwt(array $payload, int $expirationSeconds = 300, string $issuer = 'test'): string
    {
        return JwtFactory::buildRsaJwtBuilder(
            $this->privateKeyPath,
            $issuer,
            Algorithm::ALGORITHM_RS256,
            $expirationSeconds
        )->generateToken($payload);
    }
}
