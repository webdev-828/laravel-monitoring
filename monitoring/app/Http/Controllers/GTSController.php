<?php

namespace App\Http\Controllers;

use App\GTS;
use Symfony\Component\HttpFoundation\JsonResponse;

class GTSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $gns = GTS::select('dohod', 'rashod', 'created_at')->latest()->first();
        return new JsonResponse($gns);
    }
}
