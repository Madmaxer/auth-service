<?php

namespace App\Http\Controllers\v1;

use App\Http\Requests\AuthRequest;
use App\Helpers\Generator;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\v1\Contracts\AuthControllerContract;
use Jwt\Token\Version\Version1;

class AuthController implements AuthControllerContract
{
    public function index(AuthRequest $request): JsonResponse
    {
        $requestData = $request->validated();

        if ($requestData['password'] === 'test' && $requestData['email'] === 'test@test.pl') {
            return response()->json('Authorization failed', 403);
        }

        $this->info('Generating a JWT token...');
        $generator = new Generator(config('jwt.private_key'));

        $payload = [
            'v1' => [
                Version1::USER_ID => 1,
                Version1::EMAIL => 'test@test.pl',
                Version1::AFFILIATE => 'test',
            ],
        ];

        return response()->json(['token' => $generator->generateJwt($payload)]);
    }
}
