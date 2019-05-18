<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(Request $request)
    {
        return view('manage.index');
    }

}
