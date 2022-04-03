@extends('layout.app')

@section('title')
Aide Shoes | Customers
@endsection

@section('content')
<div class="page-heading customer-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>Customers</h4>
                    <h2>table list</h2>
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
                    <h2>Customers Team</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('images/customer.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Who we are &amp; What we do?</h4>
                    <p> Here is the organizational structure of our company. In the organizational structure, the
                        highest level is the Owner. Then the CEO or Chief Executive Officer, better known as the
                        President Director. CFO or Chief Financial Officer, better known as the Director of Finance. CTO
                        or Chief Technology Officer, better known as the IT Director. After that there is the head of
                        production, warehouse, marketing, and quality control. At the final level are employees from
                        each division.<br><br>We have responsibilities according to each position. Work with discipline,
                        punctual and professional is our principle.</p>
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
                    <h2>Table Customer</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$message}}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="float-left">
                            <a href="{{route('customer.create')}}" class="btn btn-success">Tambah Data Customer</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                            <form action="{{url()->current()}}" method="get" class="form-inline">
                                <div class="relative mx-auto">
                                    <input type="search" name="keyword" value="{{request('keyword')}}" placeholder="Search"
                                    class="form-control mr-sm-2">
                                    <button type="submit" class="btn btn-outline-success my-2">Cari</button>
                                    <a type="submit" class="btn btn-info" href="{{route('customer.index')}}"> Refresh</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" width="10%">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col" width="10%">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Place Of Birth</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col" width="10%"">Address</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($customers as $customer)
                <tbody>
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td> <img height="100" width="100" src="{{asset('foto_customer/'.$customer->foto_customer)}}" alt="image"></td>
                        <td>{{$customer->nama_customer}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->gender}}</td>
                        <td>{{$customer->tempat_lahir}}</td>
                        <td>{{$customer->tgl_lahir}}</td>
                        <td>{{$customer->alamat}}</td>
                        <td>{{$customer->no_hp}}</td>
                        <td>
                            <form action="{{route('customer.destroy',$customer->id)}}" method="post">
                                <a href="{{route('customer.show',$customer->id)}}" class="btn btn-info">Show</a>
                                @if (auth()->user()->position=='Admin')
                                    <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-primary">Edit</a>
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
<div class="paginate">
    <div class="container">
        <div class="row">
            <div class="detail-data col-md-12">
                <p>Halaman : {!! $customers->currentPage() !!} <br />
                    Jumlah Data : {!! $customers->total() !!} <br />
                    Data Per Halaman : {!! $customers->perPage() !!} <br />
                </p>
            </div>
            <div class="paginate-button col-md-12">
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    $('#customer').addClass('active');

</script>
@endsection
