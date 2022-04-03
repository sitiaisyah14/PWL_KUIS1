@extends('Layout 2.layout')
@section('title')
    Aide Shoes | Edit Customer
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card mb-4" style="width: 30rem">
            <div class="card-header bg-danger text-white">
                Edit Customer
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
                <form method="post" action="{{route('customer.update',$customer->id)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="foto_customer">Foto</label>
                        <input type="file" name="foto_customer" value="{{$customer->foto_customer}}" class="form-control" id="foto_customer" aria-describedby="foto_customer">
                        <img src="{{asset('foto_customer/'.$customer->foto_customer)}}" alt="gambar_customer" width="300px">
                    </div>
                    <div class="form-group">
                        <label for="nama_customer">Nama</label>
                        <input type="text" name="nama_customer" value="{{$customer->nama_customer}}" class="form-control" id="nama_customer" aria-describedby="nama_customer" placeholder="Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$customer->email }}" class="form-control" id="email" aria-describedby="email" placeholder="aideshoes@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" aria-label="Default select example" name="gender" id="gender" required>
                            <option value="P" @if($customer->gender =="P")selected @endif>Perempuan</option>
                            <option value="L" @if($customer->gender =="L")selected @endif>Laki-Laki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="{{$customer->tempat_lahir}}" class="form-control" id="tempat_lahir" aria-describedby="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="{{$customer->tgl_lahir}}" class="form-control" id="tgl_lahir"
                            aria-describedby="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$customer->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="text" name="no_hp" value="{{$customer->no_hp}}" class="form-control" id="no_hp"
                            aria-describedby="no_hp" placeholder="No Handphone">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
