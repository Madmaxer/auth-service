<?php

namespace App\Http\Controllers\v1\Contracts;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\JsonResponse;

/**
 * @OA\Tag(
 *     name="auth",
 * )
 */
interface AuthControllerContract
{
    /**
     * @OA\Get(
     *     path="/api/v1",
     *     tags={"auth"},
     *     summary="JWT access token",
     *     description="Returns jwt token",
     *     operationId="auth",
     *     @OA\Response(response=200, description="Returns JWT token"),
     * )
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function index(AuthRequest $request): JsonResponse;
}
