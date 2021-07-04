@extends('Home.home-layout')
@section('content')
<!-- Start Contact banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact</li>
            </ul>
        </div>
    </section>
</div>
<!-- End conatct banner -->
<!-- start Conact form -->
<section class="w3l-contact-1 py-3" id="contact">
    <div class="contacts-9 py-lg-3 py-md-4">
        <div class="container">
            <div class="d-grid contact-view mb-5 pb-lg-5">
                <div class="cont-details">
                    <div class="contactct-fm-text text-left mb-md-5 mb-4">
                        <div class="header-title mb-md-5 mt-4">
                            <span class="sub-title">Find Us</span>
                            <h3 class="hny-title text-left">Additional information </h3>
                        </div>
                        <p class="mb-sm-5 mb-4">Start working with Us that can provide everything you need to
                            generate awareness,
                            drive traffic,
                            connect. <br> We guarantee that you’ll be able to have any issue resolved within 24
                            hours.</p>

                    </div>
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Phone number</h6>
                            <p><a href="tel:+(21) 255 088 4943">+(21) 255 088 4943</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Send Email</h6>
                            <p><a href="mailto:digitaledu@mail.com" class="mail">Digitaledu@mail.com</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Office Address</h6>
                            <p class="pr-lg-5">Address here, 434 Trainer Honey street, London, UK - 62617.</p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9">
                    <div class="contactct-fm map-content-9 pl-lg-2">
                        <div class="contactct-fm-text text-left">
                            <div class="header-title mb-md-5 mt-2">
                                <span class="sub-title">Subscribe to our Newsletter</span>
                                <h3 class="hny-title text-left">Join for our new Scheme</h3>
                            </div>
                            <form action="{{url('subscriber')}}" method="post">
                                @csrf
                                <div class="twice-two">
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                @if($errors->has('name'))
                                <span style="font-size: 15px;color: red;">{{$errors->first('name')}}</span>
                                @endif
                                @if($errors->has('email'))
                                <span style="font-size: 15px;color: red;margin-left: 30px;">{{$errors->first('email')}}</span>
                                @endif
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-2">Subscribe Now</button>
                                </div>

                            </form>
                        </div>
                        <div class="map-iframe">
                            <iframe src="https://www.google.com/maps/embed/v1/place?q=nauniya+maharajganj+up+india&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>


            </div>
</section>
<!-- end contact form -->
<!--/team-sec-->
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
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-2 mb-4">

                    @foreach($officerdata as $tdata)
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testi-des">
                                <div class="test-img">
                                    <img src="{{asset('officers/'.$tdata->image)}}" class="img-fluid" alt="client-img">
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
<section class="w3l-team-main" id="team">
    <div class="team py-1">
        <div class="container py-lg-2">
            <div class="header-title mb-2">
                <span class="sub-title">Our Team</span>
                <h3 class="hny-title text-left">Popular Instructors
                </h3>
            </div>
            <div class="row team-row ">
                @foreach($officerdata as $officer)
                <div class="col-lg-3 col-6 team-wrap mt-lg-2 mt-2">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/team1.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Daniel jacobs</a>
                        <p>Instructor</p>
                    </div>
                </div>
                @endforeach
                <!-- end team member -->
            </div>
        </div>
</section>
<!--//team-sec-->