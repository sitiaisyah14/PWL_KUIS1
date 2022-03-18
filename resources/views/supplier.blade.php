@extends('app')

@section('title')
    Aide Shoes
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-heading employee-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>employee</h4>
              <h2>company organization</h2>
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
              <img src="{{asset('/images/feature2-image.png')}}" alt="">
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
                <h2>Company Employee Bio</h2>
              </div>
            </div>
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
                  </tr>
                </thead>
                @foreach ($supplier as $data)
                <tbody>
                    <tr>
                      <td scope="row">{{$data->id}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->company_name}}</td>
                      <td>{{$data->address}}</td>
                      <td>{{$data->districts}}</td>
                      <td>{{$data->province}}</td>
                      <td>{{$data->postal_code}}</td>
                      <td>{{$data->phone_number}}</td>
                      <td>{{$data->bank}}</td>
                      <td>{{$data->no_rek}}</td>
                    </tr>
                  </tbody>
                @endforeach
              </table>
          </div>
        </div>
    </div>

    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Big Teams</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('/images/team_01.jpg')}}" alt="">
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
                <h4>Handika Pratama</h4>
                <span>Owner</span>
                <p>I am the owner of this shoe business company.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('/images/team 07.jpg')}}" alt="">
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
                <h4>Siti Aisyah</h4>
                <span>Chief Financial Officer (CFO) </span>
                <p>I am the CFO of this shoe business, in charge of the company's finances.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('/images/team 09.jpg')}}" alt="">
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
                <h4>Halifan Izmi Oktavian</h4>
                <span>Chief Executive Officer (CEO)</span>
                <p>I am the CEO or so-called president director of this shoe business.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('/images/team_04.jpg')}}" alt="">
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
                <h4>Aprilia Faranisa Azni</h4>
                <span>Chief Technology Officer (CTO)</span>
                <p>I am the CEO or so-called IT director of this shoe business..</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('/images/team_05.jpg')}}" alt="">
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
                <h4>Arwin Santosa</h4>
                <span>Quality Control</span>
                <p>I am the quality control of this shoe business company.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('images/team_06.jpg')}}" alt="">
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
                <h4>Rohimah Dahlia</h4>
                <span>Quality Control</span>
                <p>I am the quality control of this shoe business company.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('/images/team_02.jpg')}}" alt="">
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
                <h4>Alvina Khoiriyah</h4>
                <span>Head of Marketing</span>
                <p>I am the head of marketing for this shoe business.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('/images/team 10.jpg')}}" alt="">
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
                <h4>Handra Rahmano</h4>
                <span>Head of Production</span>
                <p>I am the head of production of this shoe business company.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('images/team 08.jpg')}}" alt="">
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
                <h4>Rina Sania</h4>
                <span>Head of Warehouse</span>
                <p>I am the head of warehouse of this shoe business company.</p>
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
