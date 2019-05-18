<?php

namespace App\Http\Controllers;

use App\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->idciudad)) {
            $hotels = Hotel::where('idciudad', $request->idciudad)
                ->orderBy('precio')->get();
        } else {
            $hotels = Hotel::orderBy('precio')
                ->get();
        }

        return view('hotel.index', [
            'hotels' => $hotels,
        ]);
    }

}
