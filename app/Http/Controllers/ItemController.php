<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        // $items = Item::all();
        $items = Item::orderBy('id')->paginate(5);

        return view('product.item',compact('items'))
            ->with('i',(request()->input('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.itemCreate');
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
            'id_supplier' => 'required',
            'gambar_sepatu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'merk_sepatu' => 'required',
            'jenis_sepatu' => 'required',
            'no_sepatu' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);


        // //fungsi eloquent untuk menambah data
        // Item::create($request->all());
        $item = $request->all();

        if ($image = $request->file('gambar_sepatu')) {
            $destinationPath = 'gambar_sepatu/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $item['gambar_sepatu'] = "$profileImage";
        }

        Item::create($item);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('item.index')
        -> with('success','Item Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Id Item
        $barang = Item::find($id);
        return view('product.itemDetail',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Menampilkan detail data dengan menemukan berdasarkan id item untuk diedit
        $barang = Item::find($id);
        return view('product.itemEdit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //Melakukan validasi data
        $request->validate([
            'id_supplier' => 'required',
            'gambar_sepatu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'merk_sepatu' => 'required',
            'jenis_sepatu' => 'required',
            'no_sepatu' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        $input = $request->all();

        if ($image = $request->file('gambar_sepatu')) {
            $destinationPath = 'gambar_sepatu/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar_sepatu'] = "$profileImage";
        }else{
            unset($input['gambar_sepatu']);
        }

        Item::find($id)->update($input);

        //jika data berhasil diupdate,akan kembali ke halaman utama
        return redirect()->route('item.index')
        ->with('success','Item Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect()->route('item.index')
        ->with('success','Item Berhasil Dihapus');
    }
}
