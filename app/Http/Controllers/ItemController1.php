<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function item(){
        $dataitem = Item::paginate(3);

        return view('product.item')
            -> with('item',$dataitem);
    }
}
