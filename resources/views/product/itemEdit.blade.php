@extends('Layout 2.layout')
@section('title')
    Aide Shoes | Edit Item
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem">
            <div class="card-header">
                Edit Item
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{route('item.update',$barang->id)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">Id Barang</label>
                        <input type="text" name="id" class="form-control" id="id" aria-describedby="id" value="{{$barang->id}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="id_supplier">Id Supplier</label>
                        <input type="text" name="id_supplier" class="form-control" id="id_supplier" aria-describedby="id_supplier" value="{{$barang->id_supplier}}">
                    </div>
                    <div class="form-group">
                        <label for="gambar_sepatu">Gambar</label>
                        <input type="file" name="gambar_sepatu" class="form-control" id="gambar_sepatu" aria-describedby="gambar_sepatu">
                        <img src="{{asset('gambar_sepatu/'.$barang->gambar_sepatu)}}" alt="gambar" width="300px">
                    </div>
                    <div class="form-group">
                        <label for="merk_sepatu">Merk Sepatu</label>
                        <input type="text" name="merk_sepatu" class="form-control" id="merk_sepatu" aria-describedby="merk_sepatu" value="{{$barang->merk_sepatu}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_sepatu">Jenis Sepatu</label>
                        <input type="text" name="jenis_sepatu" class="form-control" id="jenis_sepatu" aria-describedby="jenis_sepatu" value="{{$barang->jenis_sepatu}}">
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

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
