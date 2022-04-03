<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $customers = Customer::when($request->keyword, function($query) use ($request){
            $query
            ->where('nama_customer','like',"%{$request->keyword}%")
            ->orWhere('email','like',"%{$request->keyword}%")
            ->orWhere('gender','like',"%{$request->keyword}%")
            ->orWhere('tempat_lahir','like',"%{$request->keyword}%")
            ->orWhere('tgl_lahir','like',"%{$request->keyword}%")
            ->orWhere('alamat','like',"%{$request->keyword}%")
            ->orWhere('no_hp','like',"%{$request->keyword}%");
        })->orderBy('id')->paginate($pagination);

        $customers->appends($request->only('keyword'));
        return view('customer.customer',compact('customers'))
            ->with('i',($request->input('page',1)-1)*$pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.customerCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'foto_customer' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_customer' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        //fungsi eloquent untuk menambahkan data
        $customer = $request->all();

        if ($image = $request->file('foto_customer')) {
            $destinationPath = 'foto_customer/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $customer['foto_customer'] = "$profileImage";
        }

        Customer::create($customer);

        //jika data berhasil ditambahkan, akan kembali ke halaman index
        return redirect()->route('customer.index')
        -> with('success','Customer Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.customerDetail',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.customerEdit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_customer' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        //fungsi eloquent untuk menambahkan data
        $customer = $request->all();

        if ($image = $request->file('foto_customer')) {
            $destinationPath = 'foto_customer/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $customer['foto_customer'] = "$profileImage";
        } else {
            unset($customer['foto_customer']);
        }

        Customer::find($id)->update($customer);

        //jika data berhasil ditambahkan, akan kembali ke halaman index
        return redirect()->route('customer.index')
        -> with('success','Data Customer Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect()->route('customer.index')
        ->with('success','Customer Berhasil Dihapus');
    }

    public function __construct(){
        $this->middleware('auth');
    }
    
}
