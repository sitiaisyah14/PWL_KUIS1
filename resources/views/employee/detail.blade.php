@extends('layout 2.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 30rem;">
            <div class="card-header">
                Detail Supplier
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id: </b>{{$Employee->id}}</li>
                    <div class="form-group">
                        <label for="id">ID</label> <br>
                        <input type="text" name="id" class="form-control" id="id" value="{{$Employee->id}}" readonly aria-describedby="id">
                    </div>
                    <li class="list-group-item"><b>Name: </b>{{$Employee->name}}</li>
                    <li class="list-group-item"><b>Username: </b>{{$Employee->username}}</li>
                    <li class="list-group-item"><b>Password: </b>{{$Employee->password}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$Employee->email}}</li>
                    <li class="list-group-item"><b>Gender: </b>{{$Employee->gender}}</li>
                    <li class="list-group-item"><b>Place Of Birth : </b>{{$Employee->place_of_birth}}</li>
                    <li class="list-group-item"><b>Date Of Birth: </b>{{$Employee->date_of_birth}}</li>
                    <li class="list-group-item"><b>Phone: </b>{{$Employee->phone_number}}</li>
                    <li class="list-group-item"><b>Status: </b>{{$Employee->status}}</li>
                    <li class="list-group-item"><b>Position: </b>{{$Employee->position}}</li>
                    <li class="list-group-item"><b>Wages: </b>{{$Employee->wages}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{route('employee.index')}}">Kembali</a>
        </div>
    </div>
</div>
@endsection
