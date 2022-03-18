@extends('app')

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
            <h2>Company Team</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="{{asset('/images/feature-image.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Who we are &amp; What we do?</h4>
            <p> Here is the organizational structure of our company. In the organizational structure, the highest level is the Owner. Then the CEO or Chief Executive Officer, better known as the President Director. CFO or Chief Financial Officer, better known as the Director of Finance. CTO or Chief Technology Officer, better known as the IT Director. After that there is the head of production, warehouse, marketing, and quality control. At the final level are employees from each division.<br><br>We have responsibilities according to each position. Work with discipline, punctual and professional is our principle.</p>
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
        </div>
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
              </tr>
            </thead>
            @foreach ($item as $a)
            <tbody>
                <tr>
                  <td>{{$a->id}}</td>
                  <td>{{$a->id_supplier}}</td>
                  <td> <img height = "100" width = "100" src="{{$a->gambar_sepatu}}" alt="image"></td>
                  <td>{{$a->merk_sepatu}}</td>
                  <td>{{$a->jenis_sepatu}}</td>
                  <td>{{$a->no_sepatu}}</td>
                  <td>{{$a->stok}}</td>
                  <td>{{$a->harga}}</td>

                </tr>
              </tbody>
            @endforeach
          </table>
      </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $('#item').addClass('active');
    </script>
@endsection
