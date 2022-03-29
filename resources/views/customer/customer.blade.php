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
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Place Of Birth</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col" width="20%">Address</th>
                        <th scope="col">Telephone</th>
                    </tr>
                </thead>
                @foreach ($customer as $a)
                <tbody>
                    <tr>
                        <td>{{$a->id}}</td>
                        <td> <img height="100" width="100" src="{{$a->foto_customer}}" alt="image"></td>
                        <td>{{$a->nama_customer}}</td>
                        <td>{{$a->gender}}</td>
                        <td>{{$a->tempat_lahir}}</td>
                        <td>{{$a->tgl_lahir}}</td>
                        <td>{{$a->alamat}}</td>
                        <td>{{$a->no_hp}}</td>

                    </tr>
                </tbody>
                @endforeach
            </table>

            <div class="paginate">
                <div class="container">
                    <div class="row">
                        <div class="detail-data col-md-12">
                            <p>Halaman : {{ $customer->currentPage() }} <br />
                                Jumlah Data : {{ $customer->total() }} <br />
                                Data Per Halaman : {{ $customer->perPage() }} <br />
                            </p>
                        </div>
                        <div class="paginate-button col-md-12">
                            {{$customer->links()}}
                        </div>
                    </div>
                </div>
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
