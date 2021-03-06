<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><h2>aisyde   <em>Shoes</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}" id="products">Products</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}" id="about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}" id="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('item.index')}}" id="item">Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customer.index')}}" id="customer">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('supplier.index')}}" id="supplier">Supplier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('employee.index')}}" id="employee">Employee</a>
                    </li>
                    @if (Auth::user())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                          {{Auth()->user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item">Position : {{Auth()->user()->position}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                    </li>
                    @else
                        <li class="nav-item ">
                            <a class="btn btn-primary" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
