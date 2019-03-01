<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use DB;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $portfolios = DB::table('portfolios')->get();
        return view('admin', ['portfolios' => $portfolios]);
    }
}
