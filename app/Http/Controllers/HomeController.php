<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::all();

        return view('welcome', [
            'cities' => $cities,
        ]);
    }
}
