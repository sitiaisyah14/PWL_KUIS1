@extends('layout 2.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Supplier
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id: </b>{{$Supplier->id}}</li>
                    <li class="list-group-item"><b>Name: </b>{{$Supplier->name}}</li>
                    <li class="list-group-item"><b>Company Name: </b>{{$Supplier->company_name}}</li>
                    <li class="list-group-item"><b>Address: </b>{{$Supplier->address}}</li>
                    <li class="list-group-item"><b>Districts: </b>{{$Supplier->districts}}</li>
                    <li class="list-group-item"><b>Province: </b>{{$Supplier->province}}</li>
                    <li class="list-group-item"><b>Postal Code: </b>{{$Supplier->postal_code}}</li>
                    <li class="list-group-item"><b>Phone Number: </b>{{$Supplier->phone_number}}</li>
                    <li class="list-group-item"><b>Bank: </b>{{$Supplier->bank}}</li>
                    <li class="list-group-item"><b>No Rek: </b>{{$Supplier->no_rek}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{route('supplier.index')}}">Kembali</a>
        </div>
    </div>
</div>
@endsection
