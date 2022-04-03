
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aide|Login</title>
    <link rel="stylesheet" href="{{asset('css/login-style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="POST" action="{{route('login')}}">
                @csrf
                <input type="text" placeholder="username" id="username" class="@error('username') is-invalid @enderror" name="username" value="{{old('username')}}" required autocomplete="username" autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <input type="password" placeholder="password" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

                {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div> --}}

                <div class="row mb-0">
                    <button type="submit">Login</button>
                    @if (Route::has('password.request'))
                        <a href="{{route('password.request')}}" class="btn btn-link">
                            {{__('Forgot Your Password?')}}
                        </a>
                    @endif
                </div>

                <p class="message text-center">Not registered? <a href="{{route('register')}}">Create an account</a></p>
            </form>
        </div>
    </div>

</body>

</html>
