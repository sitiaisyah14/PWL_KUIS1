<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function supplier(){
        $data = supplier::all();
        return view('supplier', ['supplier'=>$data]);
    }
}
