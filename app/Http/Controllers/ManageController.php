<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use App\Train;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(Request $request)
    {
        return view('manage.index');
    }

    public function ticket($ticketcode)
    {
        $ticket = Ticket::where('localizador', $ticketcode)->get();
        $usuario = User::where('id', $ticket[0]->idusuario)->get();
        $train = Train::where('id', $ticket[0]->idtren)->get();

        $ticketView = array('localizador' => $ticket[0]->localizador, 'name' => $usuario[0]->nombre, 'date' => $train[0]->horasalida);
        return view('manage.ticket', [
            'ticket' => $ticketView
        ]);
    }

}
