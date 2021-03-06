@extends('layout.app')

@section('title')
Aide Shoes
@endsection

@section('content')
<!-- Page Content -->
<div class="page-heading supplier-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>supplier</h4>
                    <h2>our supplier</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="best-features about-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Supplier Explanation</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('/images/feature3-image.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>What are Suppliers &amp; What is the supplier's advantage?</h4>
                    <p>Suppliers are individuals or companies/businesses that provide products or services to other
                        entities. In business, suppliers play a role in providing distributors or retailers with high
                        quality products at good prices for resale.
                        <br><br>
                        Our suppliers are from various regions in Indonesia. Our suppliers are about 10 people who have
                        trusted us about 7 years. We always provide separate prices for suppliers. In addition, we also
                        give a bonus every month as a reward for the supplier who has taken the most goods. Sometimes we
                        also give discounts every month, if the supplier takes the highest quantity or total price.</p>
                    <ul class="social-icons">
                        <button type="button" class="btn btn-secondary btn-sm">Read More</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="best-features about-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Supplier Details</h2>
                </div>
                <div>
                    @if($message=Session::get('success'))
                    <div class="alert alert-success role="alert"">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>{{$message}}</p>
                    </div>
                    @endif
                </div>

                <form action="{{ url()->current() }}" method="get" class="form-inline">
                    <div class="relative mx-sm-3 mb-2">
                      <input type="search" name="keyword" value="{{ request('keyword') }}" placeholder="Search your data....." class="form-control">
                      <button type="submit" class="btn btn-secondary mb-1"> Search</button>
                      <a type="submit" class="btn btn-info mb-1" href="{{route('supplier.index')}}"> Refresh</a>
                    </div>
                </form>

                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{route('supplier.create')}}"> Tambah Data Supplier</a>
                </div>
            </div>
            <div class="table-responsive-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Address</th>
                            <th scope="col">Districts</th>
                            <th scope="col">Province</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Bank</th>
                            <th scope="col">Account Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach ($Suppliers as $Supplier)
                    <tbody>
                        <tr>
                            <td scope="row">{{$Supplier->id}}</td>
                            <td>{{$Supplier->name}}</td>
                            <td>{{$Supplier->company_name}}</td>
                            <td>{{$Supplier->address}}</td>
                            <td>{{$Supplier->districts}}</td>
                            <td>{{$Supplier->province}}</td>
                            <td>{{$Supplier->postal_code}}</td>
                            <td>{{$Supplier->phone_number}}</td>
                            <td>{{$Supplier->bank}}</td>
                            <td>{{$Supplier->no_rek}}</td>

                            <td>
                                <form action="{{ route('supplier.destroy',  $Supplier->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{route('supplier.show', $Supplier->id)}}">Show</a> <br> <br>
                                    @if (auth()->user()->position=='Admin')
                                    <a class="btn btn-primary" href="{{route('supplier.edit', $Supplier->id)}}">Edit</a> <br> <br>
                                    @endif
                                    @csrf
                                    @method('DELETE')
                                    @if (auth()->user()->position=='Admin')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</div>
<div class="paginate">
    <div class="container">
        <div class="row">
            <div class="detail-data col-md-12">
                <p>Page : {!! $Suppliers->currentPage() !!} <br />
                    Data Count : {!! $Suppliers->total() !!} <br />
                    Data Per Page : {!! $Suppliers->perPage() !!} <br />
                </p>
            </div>
            <div class="paginate-button col-md-12">
                {!! $Suppliers->links() !!}
            </div>
        </div>
    </div>
</div>

<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Best Supplier</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('/images/supplier1-images.jpg')}}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="down-content">
                        <h4>Rahman Adiwijaya</h4>
                        <span>PT. Wijaya Sentosa</span>
                        <p>This supplier has a company located on Jl. Kh. Wachid Hasyim No.24, Bangilan, Panggungrejo,
                            Pasuruan City, East Java 67116</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('/images/supplier3-images.jpg')}}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="down-content">
                        <h4>Muhammad Kariono</h4>
                        <span>PT. Sepatu Bandung Jaya</span>
                        <p>This supplier has a company located on Jl. A. Yani No.87, Kb. Banana, District. Sumur,
                            Bandung, Bandung City, West Java 40262</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('/images/supplier2-images.jpg')}}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="down-content">
                        <h4>Hj. Faisal</h4>
                        <span>Toko Abdullah</span>
                        <p>This supplier has a company located on Jl. Tukad Ijo Gading No. 8, Dauh Puri Klod, South
                            Denpasar, Denpasar City, Bali 80234</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('#supplier').addClass('active');

</script>
@endsection
