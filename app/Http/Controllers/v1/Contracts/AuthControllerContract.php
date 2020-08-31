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
     * @OA\Post(
     *     path="/api/v1/auth",
     *     tags={"auth"},
     *     summary="JWT access token",
     *     description="Returns jwt token",
     *     operationId="auth",
     *     @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         required=true,
     *         example="application/json",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="Content-Type",
     *         in="header",
     *         required=true,
     *         example="application/json",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(response=200, description="Returns JWT token"),
     *     requestBody={"$ref": "#/components/requestBodies/Authenticate"}
     * )
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function index(AuthRequest $request): JsonResponse;
}
