<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function employee(){
        $data = employee::all();
        return view('employee', ['employee'=>$data]);
    }
}
