@extends('Layout 2.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Tambah Data Supplier </div>
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
                <form method="post" action="{{route('supplier.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label> <br>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label> <br>
                        <input type="text" name="company_name" class="form-control" id="company_name" aria-describedby="company_name">
                    </div>
                    <div class="form-group">
                        <label for="address">address</label> <br>
                        <input type="text" name="address" class="form-control" id="address" aria-describedby="address">
                    </div>
                    <div class="form-group">
                        <label for="districts">Districts</label> <br>
                        <input type="text" name="districts" class="form-control" id="districts" aria-describedby="districts">
                    </div>
                    <div class="form-group">
                        <label for="province">Province</label> <br>
                        <input type="text" name="province" class="form-control" id="province" aria-describedby="province">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postal Code</label> <br>
                        <input type="number" name="postal_code" class="form-control" id="postal_code" aria-describedby="postal_code">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label> <br>
                        <input type="text" name="phone_number" class="form-control" id="phone_number" aria-describedby="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="bank">Bank</label> <br>
                        <input type="text" name="bank" class="form-control" id="bank" aria-describedby="bank">
                    </div>
                    <div class="form-group">
                        <label for="no_rek">Rek</label> <br>
                        <input type="text" name="no_rek" class="form-control" id="no_rek" aria-describedby="no_rek">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
