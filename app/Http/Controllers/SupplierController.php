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
    public function index()
    {
        // Fungsi elaquent menampilkan data menggunakan pagination
        // $Supplier = Supplier::all(); //Mengambil semua isi tabel
        $Suppliers = Supplier::orderBy('id')->paginate(6);
        return view('supplier.supplier', compact('Suppliers'))
            ->with('i', (request()->input('page', 1)-1)*5);

        // $supplier = Supplier::latest()->paginate(5);
        // return view('supplier.supplier',compact('Supplier'));
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        // $Supplier = Supplier::all();
        // return view('supplier.supplier',compact('Supplier'));
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

        // // fungsi eloquent untuk menambah data
        Supplier::create($request->all());


        // // jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('supplier.index')
            ->with('success', 'Supplier Berhasil Ditambahkan');

        // $input = $request->all();

        // Supplier::create($input);

        // return redirect()->route('supplier.supplier')
        //                 ->with('success','Supplier created successfully.');
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

        // return view('supplier.detail', compact('Supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa
        //untuk diedit
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

        // //fungsi eloquent untuk mengupdate data inputan kita
        Supplier::find($id)->update($request->all());


        // //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('supplier.index')
            ->with('success', 'Supplier Berhasil Diupdate');

        // $input = $request->all();

        // $Supplier->update($input);

        // return redirect()->route('supplier.supplier')
        //                 ->with('success','Supplier updated successfully');
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

        // $Supplier->delete();

        // return redirect()->route('supplier.supplier')
        //                 ->with('success','Supplier deleted successfully');
    }
}
