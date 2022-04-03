@extends('layout 2.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 35rem;">
            <div class="card-header">
                <b>Edit Employee</b>
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
                <form method="post" action="{{ route('employee.update', $Employee->id)}}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Name</label> <br>
                            <input type="text" name="name" class="form-control" id="name" value="{{$Employee->name}}" aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label> <br>
                            <input type="text" name="username" class="form-control" id="username" value="{{$Employee->username}}" aria-describedby="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label> <br>
                            <input type="text" name="password" class="form-control" id="password" value="{{$Employee->password}}" aria-describedby="password">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label> <br>
                            <input type="text" name="email" class="form-control" id="email" value="{{$Employee->email}}" aria-describedby="email">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label> <br>
                            <select class="form-control @error('gender') is-invalid
                            @enderror" aria-label="Default select example" name="gender" id="gender" required>
                                <option value="P" @if($Employee->gender =="P")selected @endif>Perempuan</option>
                                <option value="L" @if($Employee->gender =="L")selected @endif>Laki-Laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="place_of_birth">Place Of Birth</label> <br>
                            <input type="text" name="place_of_birth" class="form-control" id="place_of_birth" value="{{$Employee->place_of_birth}}" aria-describedby="place_of_birth">
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date Of Birth</label> <br>
                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{$Employee->date_of_birth}}" aria-describedby="date_of_birth">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label> <br>
                            <input type="text" name="phone_number" class="form-control" id="phone_number" value="{{$Employee->phone_number}}" aria-describedby="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label> <br>
                            <select class="form-control @error('status') is-invalid
                        @enderror" aria-label="Default select example" name="status" id="status" required>
                            <option value="Belum Kawin" @if($Employee->status =='Belum Kawin')selected @endif>Belum Kawin</option>
                            <option value="Sudah Kawin" @if($Employee->status =='Sudah Kawin')selected @endif>Sudah Kawin</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label> <br>
                            <select class="form-control @error('position') is-invalid
                            @enderror" aria-label="Default select example" name="position" id="position" required>
                                <option @if($Employee->position =='Chief Financial Officer (CFO)')selected @endif value="Owner">Owner</option>
                                <option @if($Employee->position =='Chief Executive Officer (CEO)')selected @endif value="Chief Executive Officer (CEO)" >Chief Executive Officer (CEO)</option>
                                <option @if($Employee->position =='Chief Financial Officer (CFO)')selected @endif value="Chief Financial Officer (CFO)" >Chief Financial Officer (CFO)</option>
                                <option @if($Employee->position =='Chief Technology Officer (CTO)')selected @endif value="Chief Technology Officer (CTO)" >Chief Technology Officer (CTO)</option>
                                <option @if($Employee->position =='Head of Production')selected @endif value="Head of Production" >Head of Production</option>
                                <option @if($Employee->position =='Head of Marketing')selected @endif value="Head of Marketing" >Head of Marketing</option>
                                <option @if($Employee->position =='Head of Warehouse')selected @endif value="Head of Warehouse" >Head of Warehouse</option>
                                <option @if($Employee->position =='Quality Control')selected @endif value="Quality Control" >Quality Control</option>
                                <option @if($Employee->position =='Production Employee')selected @endif value="Production Employee" >Production Employee</option>
                                <option @if($Employee->position =='Warehouse employee')selected @endif value="Warehouse employee" >Warehouse employee</option>
                                <option @if($Employee->position =='Marketing Employee')selected @endif value="Marketing Employee" >Marketing Employee</option>
                                <option @if($Employee->position =='Admin')selected @endif value="Admin" >Admin</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="wages">Wages</label> <br>
                            <input type="number" name="wages" class="form-control" id="wages" value="{{$Employee->wages}}" aria-describedby="wages">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
