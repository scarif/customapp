<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function view($id)
    {
        return view('record');
    }

    public function store(Request $request)
    {
//        dd($request);

        $record = new \App\InventoryRecord;

        $record->inventory_id = json_encode([array(
            'Macbook' => 1,
            'Mouse' => 2,
            'Keyboard' => 3
        )]);
        $record->description = $request->message;

        $record->save();
        $rec_id =  $record->id;
        return view('store', compact('rec_id'));
    }

}
