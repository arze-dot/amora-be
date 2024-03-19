<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HealthCheck;
use App\Services\HealthCheckService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class HealthCheckController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $health = HealthCheck::all();
            return response()->json([
                'success' => true,
                'data' => $health,
            ]);
        } catch (Throwable $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function test(): JsonResponse
    {
        try {
            return response()->json([
                'status' => 200,
                'message' => 'Ini API BRO',
            ]);
        } catch (Throwable $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
