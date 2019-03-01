<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myinfo;
use App\Portfolio;
use DB;

class IndexController extends Controller
{
    //
    public function index()
    {
        $ip= \Request::ip();
        $data = \Location::get($ip);
        $city;
        $state;
        $country;
        if ($data->cityName == null) {
            $city = "";
        } else {
            $city = $data->cityName;
        }
        if ($data->regionName == null) {
            $state = "";
        } else {
            $state = $data->regionName;
        }
        if ($data->countryName == null) {
            $country = "";
        } else {
            $country = $data->countryName;
        }
        $result = DB::insert("insert into clients (ip_address, city, state, country) values(?, ?, ?, ?)", [$ip, $city, $state, $country]);
        if ($result) {
            $myinfos = DB::table('myinfos')->get();
            $portfolios = DB::table('portfolios')->get();
            return view('index', ['myinfos' => $myinfos, 'portfolios' => $portfolios]);
        } else {
            echo "Your IP Address Invalid";
        }      
    }
}
