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
                <form method="post" action="{{route('employee.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label> <br>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label> <br>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label> <br>
                        <input type="text" name="password" class="form-control" id="password" aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label> <br>
                        <input type="text" name="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label> <br>
                        <input type="text" name="gender" class="form-control" id="gender" aria-describedby="gender">
                    </div>
                    <div class="form-group">
                        <label for="place_of_birth">Place Of Birth</label> <br>
                        <input type="text" name="place_of_birth" class="form-control" id="place_of_birth" aria-describedby="place_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date Of Birth</label> <br>
                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" aria-describedby="date_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label> <br>
                        <input type="text" name="phone_number" class="form-control" id="phone_number" aria-describedby="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label> <br>
                        <input type="text" name="status" class="form-control" id="status" aria-describedby="status">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label> <br>
                        <input type="text" name="position" class="form-control" id="position" aria-describedby="position">
                    </div>
                    <div class="form-group">
                        <label for="wages">Wages</label> <br>
                        <input type="number" name="wages" class="form-control" id="wages" aria-describedby="wages">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
