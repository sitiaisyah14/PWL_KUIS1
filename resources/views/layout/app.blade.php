<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap')" rel="stylesheet">

        <title>@yield('title')</title>


        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/templatemo-sixteen.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.css')}}">
        <link rel="shortcut icon" href="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-shoes-fitness-gym-justicon-flat-justicon.png"" type="image/x-icon" />

    </head>

    <body>
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- Header -->
        @include('navbar')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('footer')



        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>


        <!-- Additional Scripts -->
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/owl.js')}}"></script>
        <script src="{{asset('js/slick.js')}}"></script>
        <script src="{{asset('js/isotope.js')}}"></script>
        <script src="{{asset('js/accordions.js')}}"></script>

        <!-- Active Navbar -->
        @yield('js')

        <script language = "text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
        </script>

    </body>
</html>
