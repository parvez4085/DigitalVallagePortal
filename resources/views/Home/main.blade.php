@extends('Home.home-layout')
@section('content')
<!-- Start Slider -->
@include('Home.includes.slider')
<!-- End Slider -->
@if(Session::has('succMsg'))
<div class="alert alert-success" style="font-size: 15px;"> {{session('succMsg')}} </div>
@endif
@if(Session::has('errMsg'))
<div class="alert alert-danger" style="font-size: 15px;"> {{session('errMsg')}} </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <marquee behavior="scroll" scrollamount="5" onmouseover="stop()" onmouseout="start()">
                @foreach($news as $bnews)
                <span style="color:#f35b04">({{$bnews->title}})</span>
                <span>{{$bnews->news}}&nbsp;||</span>

                @endforeach
            </marquee>
        </div>
    </div>
</div>
<!--Start Leader sanjay Prajapati-->
<section class="w3l-servicesblock py-2" id="about">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-sm-5 mb-4 pr-lg-5">
                <div class="header-title mb-md-5 mb-4">
                    <span class="sub-title">Gram Pradhan</span>
                    <h3 class="hny-title text-left">Educating Champions of a Just and Sustainable World.

                    </h3>
                </div>
                <div class="two-grids mt-md-0 mt-md-5 mt-4">
                    <div class="grids_info">
                        <h4>Our Mission</h4>
                        <p class="">Pellen tesque libero ut justo,
                            ultrices in ligula.</p>
                    </div>
                    <div class="grids_info">
                        <h4>Our Vision</h4>
                        <p class="">Pellen tesque libero ut justo,
                            ultrices in ligula.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-4">
                <img src="assets/images/ab4.jpg" alt="" class="img-fluid radius-image">
            </div>


        </div>
    </div>
</section>
<!-- End leader -->
<!-- Start About Home-1-->
<div class="content-1 py-5">
    <div class="container py-md-5">
        <div class="row content-1-grids">
            <div class="col-lg-4 content-1-left forms-25-info">
                <div class="header-title">
                    <span class="sub-title">About Us</span>
                    <h3 class="hny-title">Learn at Your Own Place</h3>

                </div>
            </div>
            <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                    elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
                    dolor sit, amet elit. Dolor ipsum non velit.
                </p>
            </div>
            <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                    elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
                    dolor sit, amet elit. Dolor ipsum non velit.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End About-->

<!--Start middle Banner (Class->middle) -->
<div class="middle py-5">
    <div class="container pt-lg-2 pb-lg-4 py-4">
        <div class="welcome-left text-center py-lg-4">
            <h3 class="hny-title">Gram Panchayat Nauniya Block Nichlaul Maharajganj.</h3>
            <div class="middle-buttons pb-5">
                <a href="{{url('/about')}}" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Read More <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                <a href="{{url('/contact')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
</div>
<!-- //End middle -->
<!--Start Count Status -->
<section class="w3_stats py-lg-0 py-5" id="stats">
    <div class="container">
        <div class="w3-stats">
            <div class="row">
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <span class="fa fa-home"></span>
                        <div class="timer count-title count-number mt-3" data-to="1262" data-speed="1500"></div>
                        <a href="{{asset('village.pdf')}}" target="_blank">
                            <p class="count-text">Revenue of villages</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <span class="fa fa-bank"></span>
                        <div class="timer count-title count-number mt-3" data-to="19256" data-speed="1500"></div>
                        <a href="">
                            <p class="count-text ">Tehsil</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <span class="fa fa-megaphone"></span>
                        <div class="timer count-title count-number mt-3" data-to="12100" data-speed="1500"></div>
                        <a href="">
                            <p class="count-text ">Block</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <span class="fa fa-cap"></span>
                        <div class="timer count-title count-number mt-3" data-to="2560" data-speed="1500"></div>
                        <p class="count-text">Thana</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Count Status -->

<!--/blog-post-->
<section class="w3l-blogpost-content py-5">
    <div class="container py-md-5">
        <div class="header-title mb-md-5 mt-4">
            <span class="sub-title">Latest Posts</span>
            <h3 class="hny-title text-left">Our Blog Posts</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/ab8.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="blog-single.html" class="blog-desc">Learning to Write as a Professional Author
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/admin.jpg" alt="" class="img-fluid rounded-circle">
                            <ul class="blog-meta">
                                <li>
                                    <a href="#">Isabella ava</a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Sep 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/ab2.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="blog-single.html" class="blog-desc">Learning to Write as a Professional Author</a>
                        <div class="author align-items-center">
                            <img src="assets/images/admin.jpg" alt="" class="img-fluid rounded-circle">
                            <ul class="blog-meta">
                                <li>
                                    <a href="#">Charlotte mia</a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Sep 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/ab6.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="blog-single.html" class="blog-desc">Learning to Write as a Professional Author
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/admin.jpg" alt="" class="img-fluid rounded-circle">
                            <ul class="blog-meta">
                                <li>
                                    <a href="#">Elizabeth</a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Sep 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//blog-posts-->

<!--/w3l-newsletter-->
<section class="w3l-newsletter">
    <!-- /form-25-section -->
    <div class="form-25-main py-2">
        <div class="container py-lg-5">
            <div class="forms-25-info">

                <div class="header-title mb-md-3 mt-4">
                    <span class="sub-title">Subscribe to our Newsletter</span>
                    <h3 class="hny-title text-left">Join our Community of Students</h3>
                </div>
                <form action="{{url('subscriber')}}" method="post" class="signin-form mt-4 mb-2">
                    @csrf
                    <div class="forms-gds">
                        <input type="text" name="name" placeholder="Name" />

                        <input type="text" name="email" placeholder="Email" />
                        <button class="btn btn-style btn-primary">Subscribe</button>
                    </div>
                    @if($errors->has('name'))
                    <span style="font-size: 15px;color: red;">{{$errors->first('name')}}</span>
                    @endif
                    @if($errors->has('email'))
                    <span style="font-size: 15px;color: red;margin-left: 30px;">{{$errors->first('email')}}</span>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>
<!--//w3l-newsletter-->
<!-- testimonials -->
<section class="w3l-clients-1" id="testimonials">
    <!-- /grids -->
    <div class="cusrtomer-layout py-3">
        <div class="container py-lg-2 py-md-2">
            <div class="header-title mb-md-3 mb-1">
                <span class="sub-title">Testimonials</span>
                <h3 class="hny-title text-left">What People Say
                    <a href="#" class="float-right btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#feedbackModal">
                        <span class="icon text-white-50">
                            <i class="fa fa-check"></i>
                        </span>
                        <span class="text">Give feedback</span>
                    </a>
                </h3>
            </div>
            <!-- /grids -->
            <div class="testimonial-row">
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">

                    @foreach($testdata as $tdata)
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>{{$tdata->message}}</q>
                                </blockquote>
                            </div>
                            <div class="testi-des">
                                <div class="test-img">
                                    <img src="{{asset('testimonial/'.$tdata->profile)}}" class="img-fluid" alt="client-img">
                                </div>
                                <div class="peopl align-self">
                                    <h4>{{$tdata->name}}</h4>
                                    <p class="indentity">{{$tdata->created_at->format('d/m/y')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
<!-- //testimonials -->
<!-- Start Add Silder Model -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-0">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Give Feedback
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </h1>

                            </div>
                            <form action="{{url('addfeedback')}}" method="post" class="user" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control form-control">
                                        @if($errors->has('name'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('name')}}</span>
                                        @endif<br>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Upload Profile</label>
                                        <input type="file" name="file" class="form-control form-control">
                                        @if($errors->has('file'))
                                        <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('file')}}</span>
                                        @endif<br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control form-control-user" placeholder="Message"></textarea>
                                    @if($errors->has('message'))
                                    <span class="py-2" style="font-size: 15px;color: red;">{{$errors->first('message')}}</span>
                                    @endif<br>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Testinial Modal -->
@endsection