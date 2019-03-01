<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use DB;

class HistoryController extends Controller
{
    //
    public function index()
    {
        $clients = DB::table('clients')->select('id', 'ip_address', 'city', 'state', 'country')
                                       ->orderBy('id', 'desc')                                
                                       ->get();
        return view('history', ['clients' => $clients]);
    }
}
