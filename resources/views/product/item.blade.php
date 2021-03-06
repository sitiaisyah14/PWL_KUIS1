@extends('layout.app')

@section('title')
Aide Shoes | Item
@endsection

@section('content')
<div class="page-heading shoes-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>item</h4>
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
                    <h2>Best Product</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('images/adidas1.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Best Price &amp; Best Shoes</h4>
                    <p> Light, Flexible, and Forward. Vandeu shoes are designed for all-day comfort, so you can wear
                        them anywhere, any time.
                        <br><br>
                        FUTURISTIC TRAINER SHOES WITH SUPER COMFORTABLE CUSHIONING.
                        Your gaze never takes your eyes off the horizon. Likewise with adidas. These ZX Fuse Boost shoes
                        use high-tech materials to provide maximum comfort. Minimalist appearance gives a futuristic
                        impression. You can wear these shoes with laces or slip-on styles.
                    </p>
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
                    <h2>Table Item</h2>
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
                            <a href="{{route('item.create')}}" class="btn btn-success">Tambah Data Barang</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                            <form action="{{url()->current()}}" method="get" class="form-inline">
                                <div class="relative mx-auto">
                                    <input type="search" name="keyword" value="{{request('keyword')}}"
                                    placeholder="Search" class="form-control mr-sm-2">
                                    <button type="submit" class="btn btn-outline-success my-2">Cari</button>
                                    <a type="submit" class="btn btn-info" href="{{route('item.index')}}"> Refresh</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID Supplier</th>
                        <th scope="col">Image</th>
                        <th scope="col">Shoe Brand</th>
                        <th scope="col">Shoe Type</th>
                        <th scope="col">Size</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Price</th>
                        <th width="280px" scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($items as $barang)
                <tbody>
                    <tr>
                        <td>{{$barang->id}}</td>
                        <td>{{$barang->id_supplier}}</td>
                        <td> <img height="100" width="100" src="{{asset('gambar_sepatu/'.$barang->gambar_sepatu)}}" alt="image"></td>
                        <td>{{$barang->merk_sepatu}}</td>
                        <td>{{$barang->jenis_sepatu}}</td>
                        <td>{{$barang->no_sepatu}}</td>
                        <td>{{$barang->stok}}</td>
                        <td>{{$barang->harga}}</td>

                        <td>
                            <form action="{{route('item.destroy',$barang->id)}}" method="post">
                                <a href="{{route('item.show',$barang->id)}}" class="btn btn-info">Show</a>
                                @if (auth()->user()->position=='Admin')
                                    <a href="{{route('item.edit',$barang->id)}}" class="btn btn-primary">Edit</a>
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
                <p>Page : {!! $items->currentPage() !!} <br />
                    Jumlah Data : {!! $items->total() !!} <br />
                    Data Per Halaman : {!! $items->perPage() !!} <br />
                </p>
            </div>
            <div class="paginate-button col-md-12">
                {!! $items->links() !!}
            </div>
        </div>
    </div>
</div>

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>More Products</h2>
                    <a href="{{route('products')}}">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="{{asset('images/Adidas3.png')}}" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>SEPATU VL COURT 2.0</h4>
                        </a>
                        <h6>Rp 900.000</h6>
                        <p>These authentic T-toe shoes have changed from sports gear to complement casual wear</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (48)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="{{asset('images/Adidas4.png')}}" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>SEPATU SUPERSTAR</h4>
                        </a>
                        <h6>Rp 1.100.000</h6>
                        <p>Shoelaces are replaced with straps that make shoes easy to wear and remove themselves by children.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (16)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="{{asset('images/Adidas5.png')}}" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>ADIDAS SHOES</h4>
                        </a>
                        <h6>Rp 385.000</h6>
                        <p>The breathable upper keeps feet cool while a lightweight unitsole cushions their steps.</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (32)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('#item').addClass('active');

</script>
@endsection
