@extends('layout.app')

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
                    <h2>Company Employee Bio</h2>
                </div>
                <div>
                    @if($message=Session::get('success'))
                    <div class="alert alert-success role=" alert"">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>{{$message}}</p>
                    </div>
                    @endif
                </div>

                <form action="{{ url()->current() }}" method="get" class="form-inline">
                    <div class="relative mx-sm-3 mb-2">
                      <input type="search" name="keyword" value="{{ request('keyword') }}" placeholder="Search your data....." class="form-control">
                      <button type="submit" class="btn btn-secondary mb-1"> Search</button>
                      <a type="submit" class="btn btn-info mb-1" href="{{route('employee.index')}}"> Refresh</a>
                    </div>
                </form>

                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{route('employee.create')}}"> Tambah Data Employee</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Place of Birth</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Position</th>
                            <th scope="col">Wages</th>
                        </tr>
                    </thead>
                    @foreach ($Employee as $data)
                    <tbody>
                        <tr>
                            <td scope="row">{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->password}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->gender}}</td>
                            <td>{{$data->place_of_birth}}</td>
                            <td>{{$data->date_of_birth}}</td>
                            <td>{{$data->phone_number}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->position}}</td>
                            <td>{{$data->wages}}</td>
                            <td>
                                <form action="{{ route('employee.destroy',  $data->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{route('employee.show', $data->id)}}">Show</a> <br> <br>
                                    @if (auth()->user()->position=='Admin')
                                    <a class="btn btn-primary" href="{{route('employee.edit', $data->id)}}">Edit</a> <br> <br>
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
                <p>Page : {!! $Employee->currentPage() !!} <br />
                    Data Count : {!! $Employee->total() !!} <br />
                    Data Per Page : {!! $Employee->perPage() !!} <br />
                </p>
            </div>
            <div class="paginate-button col-md-12">
                {!! $Employee->links() !!}
            </div>
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
    $('#employee').addClass('active');

</script>
@endsection
