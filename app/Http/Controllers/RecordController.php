<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function view($id)
    {
        $rec = \App\InventoryRecord::find($id);
        $rec->inventory_id = json_decode($rec->inventory_id);
        return view('record', compact('rec'));
    }

    public function store(Request $request)
    {

        $record = new \App\InventoryRecord;

        $items = [];

        foreach ($request->value as $key=>$val) {
            if ($val != 0) {

                $inv = \App\Inventory::where('name', $request->name[$key])->first();
                $inv->remain = $inv->remain - $val;
                $inv->save();

                $items[$request->name[$key]] = $val;
            }
        }

        $record->inventory_id = json_encode($items);
        $record->description = $request->message;

        $record->save();
        $rec_id =  $record->id;
        return view('store', compact('rec_id'));
    }

}
