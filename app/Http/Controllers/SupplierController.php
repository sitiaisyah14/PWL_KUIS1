<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Fungsi elaquent menampilkan data menggunakan pagination

        $pagination  = 5;
        $Suppliers = Supplier::when($request->keyword, function ($query) use ($request) {
            $query
        ->where('name', 'like', "%{$request->keyword}%")
        ->orWhere('company_name', 'like', "%{$request->keyword}%")
        ->orWhere('address', 'like', "%{$request->keyword}%")
        ->orWhere('districts', 'like', "%{$request->keyword}%")
        ->orWhere('province', 'like', "%{$request->keyword}%")
        ->orWhere('postal_code', 'like', "%{$request->keyword}%")
        ->orWhere('phone_number', 'like', "%{$request->keyword}%")
        ->orWhere('bank', 'like', "%{$request->keyword}%")
        ->orWhere('no_rek', 'like', "%{$request->keyword}%");
        })->orderBy('id')->paginate($pagination);

        $Suppliers->appends($request->only('keyword'));

        return view('supplier.supplier', [
            'title'    => 'Suppliers',
            'Suppliers' => $Suppliers,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // melakukan validasi data
        $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'districts' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'bank' => 'required',
            'no_rek' => 'required',
        ]);

        // fungsi eloquent untuk menambah data
        Supplier::create($request->all());


        // jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('supplier.index')
            ->with('success', 'Supplier Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan detail data dengan menemukan/berdasarkan ID
        $Supplier = Supplier::find($id);
        return view('supplier.detail', compact('Supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Supplier = Supplier::find($id);
        return view('supplier.edit', compact('Supplier'));
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
        // melakukan validasi data
        $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'districts' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'bank' => 'required',
            'no_rek' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Supplier::find($id)->update($request->all());


        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('supplier.index')
            ->with('success', 'Supplier Berhasil Diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Supplier::find($id)->delete();
        return redirect()->route('supplier.index')
            -> with('success', 'Supplier Berhasil Dihapus');

    }

    /**
     * Remove the specified resource from storage.
     *
     */



}
