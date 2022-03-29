<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customer(){
        $data = Customer::paginate(3);
        return view('customer.customer')
        -> with('customer',$data);
    }
}
