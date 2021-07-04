@extends('Home.home-layout')
@section('content')
<!--Start About Banner-->
<div class="inner-banner">
  <section class="w3l-breadcrumb text-left">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> About Us</li>
      </ul>
    </div>
  </section>
</div>
<!-- End About banner -->
<!-- Start About us -->
<section class="w3l-index3" id="about1">
  <div class="midd-w3 py-2">
    <div class="container py-lg-3 py-md-3">
      <div class="row">
        <div class="col-lg-6 mb-lg-0 mb-md-5 mb-4">
          <img src="assets/images/ab1.jpg" alt="" class="radius-image-full img-fluid">
        </div>
        <div class="col-lg-6 pl-lg-5 ">
          <div class="header-title">
            <span class="sub-title">About Us</span>
            <h3 class="hny-title text-left">Learn at Your Own Place</h3>
          </div>

          <p class="mt-3">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
            consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in
            culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
            debitis. Quas minima sunt natus tempore.</p>
          <a href="#" class="btn btn-style btn-primary mt-sm-5 mt-4">Read More <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Us -->
<!--Start Leader -->
<section class="w3l-servicesblock py-2" id="about">
  <div class="container py-lg-5 py-md-3">
    <div class="row">
      <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-sm-5 mb-4 pr-lg-5">
        <div class="header-title mb-md-5 mb-4">
          <span class="sub-title">Why Choose Us</span>
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
<!-- Start Team List -->
@include('Home.includes.teamlist')
<!-- End Team List -->