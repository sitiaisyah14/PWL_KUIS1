{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aide|Register</title>
    <link rel="stylesheet" href="{{asset('css/register-style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="register-page">
        <div class="form">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput" >Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid
                            @enderror" id="name" name="name" value="{{old('name')}}" placeholder="Name" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Username</label>
                            <input type="text" class="form-control @error('username')
                            is-invalid @enderror" id="username" name="username" value="{{old('username')}}" required autocomplete="username"
                                placeholder="Username">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid
                            @enderror" id="password" name="password" required autocomplete="new-password"
                                placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Password Confirm</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Password Confirm">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid
                            @enderror" id="email" name="email" value="{{old('email')}}" required autocomplete="email" autofocus
                                placeholder="email@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Gender</label>
                            <select class="form-control @error('gender') is-invalid
                            @enderror" aria-label="Default select example" name="gender" id="gender" required>
                                <option value="P" @if(old('gender')=="P")selected @endif>Perempuan</option>
                                <option value="L" @if(old('gender')=="L")selected @endif>Laki-Laki</option>
                              </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Place of Birth</label>
                            <input type="text" class="form-control @error('place_of_birth')
                            is-invalid @enderror" id="place_of_birth" name="place_of_birth" value="{{old('place_of_birth')}}" required autocomplete="place_of_birth"
                                placeholder="Place of Birth">
                                @error('place_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Date of Birth</label>
                            <input type="date" class="form-control @error('date_of_birth') is-invalid
                            @enderror" id="date_of_birth" name="date_of_birth" value="{{old('date_of_birth')}}" required autocomplete="date_of_birth">
                                @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Phone Number</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid
                            @enderror" id="phone_number" name="phone_number" required autocomplete="phone_number"
                                placeholder="Phone Number" value="{{old('phone_number')}}">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Status</label>
                            <select class="form-control @error('status') is-invalid
                            @enderror" aria-label="Default select example" name="status" id="status" required>
                                <option value="Belum Kawin" @if(old('status')=='Belum Kawin')selected @endif>Belum Kawin</option>
                                <option value="Sudah Kawin" @if(old('status')=='Sudah Kawin')selected @endif>Sudah Kawin</option>
                              </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Position</label>
                            <select class="form-control @error('position') is-invalid
                            @enderror" aria-label="Default select example" name="position" id="position" required>
                                <option value="Owner">Owner</option>
                                <option value="Chief Executive Officer (CEO)" @if(old('position')=='Chief Executive Officer (CEO)')selected @endif>Chief Executive Officer (CEO)</option>
                                <option @if(old('position')=='Chief Financial Officer (CFO)')selected @endif value="Chief Financial Officer (CFO)" >Chief Financial Officer (CFO)</option>
                                <option @if(old('position')=='Chief Technology Officer (CTO)')selected @endif value="Chief Technology Officer (CTO)" >Chief Technology Officer (CTO)</option>
                                <option @if(old('position')=='Head of Production')selected @endif value="Head of Production" >Head of Production</option>
                                <option @if(old('position')=='Head of Marketing')selected @endif value="Head of Marketing" >Head of Marketing</option>
                                <option @if(old('position')=='Head of Warehouse')selected @endif value="Head of Warehouse" >Head of Warehouse</option>
                                <option @if(old('position')=='Quality Control')selected @endif value="Quality Control" >Quality Control</option>
                                <option @if(old('position')=='Production Employee')selected @endif value="Production Employee" >Production Employee</option>
                                <option @if(old('position')=='Warehouse employee')selected @endif value="Warehouse employee" >Warehouse employee</option>
                                <option @if(old('position')=='Marketing Employee')selected @endif value="Marketing Employee" >Marketing Employee</option>
                                <option @if(old('position')=='Admin')selected @endif value="Admin" >Admin</option>
                              </select>
                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Salary</label>
                            <input type="number" class="form-control @error('wages') is-invalid
                            @enderror" id="wages" name="wages" required autocomplete="wages" value="{{old('wages')}}"
                                placeholder="Wages">
                                @error('wages')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit">Create</button>
                    <p class="message">Already registered? <a href="{{route('login')}}">Sign In</a></p>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>
