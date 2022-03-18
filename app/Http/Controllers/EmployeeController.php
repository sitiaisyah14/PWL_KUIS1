<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employe;

class EmployeeController extends Controller
{
    public function employee(){
        $data = employe::all();
        return view('employe', ['employe'=>$data]);
    }
}
