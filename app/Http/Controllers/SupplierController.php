<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function supplier(){
        $data = supplier::paginate(4);
        return view('supplier.supplier', ['supplier'=>$data]);
    }
}
