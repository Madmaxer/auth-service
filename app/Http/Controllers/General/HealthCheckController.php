<?php

namespace App\Http\Controllers\General;

use Exception;
use App\Http\Controllers\General\Contracts\HealthCheckControllerContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HealthCheckController extends Controller implements HealthCheckControllerContract
{
    /**
     * @throws Exception
     *
     * @return JsonResponse
     */
    public function health(): JsonResponse
    {
        return new JsonResponse();
    }

    /**
     * @return JsonResponse
     */
    public function heartbeat(): JsonResponse
    {
        return new JsonResponse();
    }

    /**
     * @return JsonResponse
     */
    public function version(): JsonResponse
    {
        return new JsonResponse(config('app.version'));
    }
}
