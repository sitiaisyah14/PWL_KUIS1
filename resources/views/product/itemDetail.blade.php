@extends('Layout 2.layout')
@section('title')
Aide Shoes | Item Detail
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width:24rem">
            <div class="card-header">
                Detail Barang
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="id_supplier">Id Supplier</label>
                        <input type="text" name="id_supplier" class="form-control" id="id_supplier" aria-describedby="id_supplier" value="{{$barang->id_supplier}}">
                    </div>
                    <div class="form-group">
                        <label for="gambar_sepatu">Gambar</label>
                        <input type="file" name="gambar_sepatu" class="form-control" id="gambar_sepatu" aria-describedby="gambar_sepatu">
                        <img src="/gambar_sepatu/{{$barang->gambar_sepatu}}" alt="gambar" width="300px">
                    </div>
                    <div class="form-group">
                        <label for="merk_sepatu">Merk Sepatu</label>
                        <input type="text" name="merk_sepatu" class="form-control" id="merk_sepatu" aria-describedby="merk_sepatu" value="{{$barang->merk_sepatu}}">
                    </div>
                    <div class="form-group">
                        <label for="no_sepatu">No Sepatu</label>
                        <input type="number" name="no_sepatu" class="form-control" id="no_sepatu" aria-describedby="no_sepatu" value="{{$barang->no_sepatu}}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" id="stok"
                            aria-describedby="stok" value="{{$barang->stok}}">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga"
                            aria-describedby="harga" value="{{$barang->harga}}">
                    </div>
                </form>
                <a href="{{route('item.index')}}" class="btn btn-primary"> Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
