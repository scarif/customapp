<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function view()
    {        $items = \App\Inventory::all();

        return view('request', compact( 'items'));
    }

    public function store(Request $request)
    {

    }
}
