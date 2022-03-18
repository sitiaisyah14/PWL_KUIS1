<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customer(){
        $data = Customer::all();
        return view('customer')
        -> with('customer',$data);
    }
}
