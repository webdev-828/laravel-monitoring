<?php

namespace App\Http\Controllers;

use App\DohodNeNal;
use Symfony\Component\HttpFoundation\JsonResponse;

class DohodNeNalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $dohodNeNal = DohodNeNal::select('dohod', 'created_at')->latest()->first();
        return new JsonResponse($dohodNeNal);
    }
}
