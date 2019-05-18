<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(Request $request)
    {
        return view('manage.index');
    }

    public function ticket($ticketcode)
    {
        $ticket = array('code' => 'HAX728KSJ', 'name' => 'John Smith', 'date' => '2019-05-20 14:00:00');
        return view('manage.ticket', [
            'ticket' => $ticket
        ]);
    }

}
