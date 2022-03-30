@extends('layout 2.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header">
                <b>Detail Employee</b>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <div class="form-group">
                        <label for="id">ID</label> <br>
                        <input type="text" name="id" class="form-control" id="id" value="{{$Employee->id}}" readonly aria-describedby="id">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label> <br>
                        <input type="text" name="name" class="form-control" id="name" value="{{$Employee->name}}" readonly aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label> <br>
                        <input type="text" name="username" class="form-control" id="username" value="{{$Employee->username}}" readonly aria-describedby="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label> <br>
                        <input type="text" name="password" class="form-control" id="password" value="{{$Employee->password}}" readonly aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label> <br>
                        <input type="text" name="email" class="form-control" id="email" value="{{$Employee->email}}" readonly aria-describedby="email">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label> <br>
                        <input type="text" name="gender" class="form-control" id="gender" value="{{$Employee->gender}}" readonly aria-describedby="gender">
                    </div>
                    <div class="form-group">
                        <label for="place_of_birth">Place Of Birth</label> <br>
                        <input type="text" name="place_of_birth" class="form-control" id="place_of_birth" value="{{$Employee->place_of_birth}}" readonly aria-describedby="place_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date Of Birth</label> <br>
                        <input type="text" name="date_of_birth" class="form-control" id="date_of_birth" value="{{$Employee->date_of_birth}}" readonly aria-describedby="date_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label> <br>
                        <input type="text" name="phone_number" class="form-control" id="phone_number" value="{{$Employee->phone_number}}" readonly aria-describedby="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label> <br>
                        <input type="text" name="status" class="form-control" id="status" value="{{$Employee->status}}" readonly aria-describedby="status">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label> <br>
                        <input type="text" name="position" class="form-control" id="position" value="{{$Employee->position}}" readonly aria-describedby="position">
                    </div>
                    <div class="form-group">
                        <label for="wages">Wages</label> <br>
                        <input type="text" name="wages" class="form-control" id="wages" value="{{$Employee->wages}}" readonly aria-describedby="wages">
                    </div>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{route('employee.index')}}">Kembali</a>
        </div>
    </div>
</div>
@endsection
