<?php

namespace App\Http\Controllers;

use App\GNS;
use Symfony\Component\HttpFoundation\JsonResponse;

class GNSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $gns = Gns::select('dohod', 'rashod', 'created_at')->latest()->first();
        return new JsonResponse($gns);
    }
}
