<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\RequestBody(
 *     request="Authenticate",
 *     required=true,
 *     @OA\JsonContent(
 *         @OA\Property(
 *             property="email",
 *             type="string",
 *         ),
 *         @OA\Property(
 *             property="password",
 *             type="string",
 *         ),
 *     ),
 * ),
 */
class AuthRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ];
    }
}
