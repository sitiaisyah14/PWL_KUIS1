@extends('Layout 2.layout')
@section('title')
Aide Shoes | Customer Detail
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width:30rem">
            <div class="card-header bg-danger text-white">
                Detail Customer
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="foto_customer">Foto</label>
                        <input type="file" name="foto_customer" value="{{$customer->foto_customer}}"
                         class="form-control" id="foto_customer" aria-describedby="foto_customer" readonly>
                        <img src="{{asset('foto_customer/'.$customer->foto_customer)}}"
                         alt="gambar_customer" width="300px">
                    </div>
                    <div class="form-group">
                        <label for="nama_customer">Nama</label>
                        <input type="text" name="nama_customer" value="{{$customer->nama_customer}}"
                         class="form-control" id="nama_customer" aria-describedby="nama_customer" placeholder="Nama Anda" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$customer->email }}"
                         class="form-control" id="email" aria-describedby="email" placeholder="aideshoes@gmail.com" readonly>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" aria-label="Default select example" name="gender" readonly required>
                            <option value="P" @if($customer->gender =="P")selected @endif>Perempuan</option>
                            <option value="L" @if($customer->gender =="L")selected @endif>Laki-Laki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="{{$customer->tempat_lahir}}"
                         class="form-control" id="tempat_lahir" aria-describedby="tempat_lahir" placeholder="Tempat Lahir" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="{{$customer->tgl_lahir}}"
                         class="form-control" id="tgl_lahir"
                            aria-describedby="tgl_lahir" readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"
                         readonly>{{$customer->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="text" name="no_hp" value="{{$customer->no_hp}}"
                         class="form-control" id="no_hp"
                            aria-describedby="no_hp" placeholder="No Handphone" readonly>
                    </div>
                </form>
                <a href="{{route('customer.index')}}" class="btn btn-danger"> Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
