<?php

namespace App\Http\Controllers;

use App\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->idorigen) && isset($request->iddestino)) {
            $trains = Train::where('idorigen', $request->idorigen)
                ->where('iddestino', $request->iddestino)
                ->orderBy('horasalida')->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->horasalida)->format('d/m/Y');
                });;
        } else {
            $trains = Train::orderBy('horasalida')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->horasalida)->format('d/m/Y');
                });
        }

        return view('train.index', [
            'trains' => $trains,
        ]);
    }

}
