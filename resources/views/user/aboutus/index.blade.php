@extends('layouts.user.index')
@section('PageTitle', 'About MLC')
@section('user')
@include('user.include.header')

<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>About My Leadership Compass</h2>
      <ol>
        <li><a href="{!! url(''); !!}">Home</a></li>
        <li>About My Leadership Compass</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
  <div class="container">
  <img class="d-block w-100" src="{{ asset('images/mylc.png') }}" alt="First slide" style="object-position: top">
              <p><span style="font-family: Open Sans; font-size:30px;">My Leadership Compass (MLC)</span> is an initiative to enable an equitable and inclusive workspace where individuals can belong, thrive, co-learn, and co-create. Through MLC, we will work to assess, enable and improve the Diversity, Equity and Inclusion(DEI) mechanism in the professional work setting to promote sustainable performance productivity by equipping the teams and their leaders with knowledge and resources. We exist to help you build DEI lenses and be well equipped with DEI tools.</p>
                        <h1>WHAT DO WE DO?</h1>
                        <p style="font-family: Open Sans;">We offer workshops and one-one-one sessions to companies and organizations with following intentions:</p>
                        <p style="font-family: Open Sans;">
                            <i class="fa fa-check fa-lg pr-10"></i> To enhance the understanding of the basic concept of Diversity, Equity, and Inclusion at the workplace, <br>
                            <i class="fa fa-check fa-lg pr-10"></i> To understand the opportunities and gaps related to DEI at the workplace, <br>
                            <i class="fa fa-check fa-lg pr-10"></i> To build Diversity, Equity, and Inclusion culture, mindset, and framework in the team, <br>
                            <i class="fa fa-check fa-lg pr-10"></i> To improve engagements and climate of trust among employees across the company/organization, <br>
                            <i class="fa fa-check fa-lg pr-10"></i> To build an equitable and inclusive workspace where individuals can belong, thrive, co-learn, and co-create, <br>
                            <i class="fa fa-check fa-lg pr-10"></i> To make recommendations on HR recruitment and build sustaining DEI attitude and culture at the workplace. <br></p>
                        <br><hr> 
  </div>
</section>

</main><!-- End #main -->

<div id="preloader"></div>
@include('user.include.footer')
@stop

<!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="intl-msg">
                                                                                            <p onclick="msg('1')" data-toggle="modal" data-target="#other-msg">FIFA President's Message <span class="fa fa-chevron-right right" aria-hidden="true"></span> </p>
                                                                                                                            <p onclick="msg('2')" data-toggle="modal" data-target="#other-msg">AFC President's Message <span class="fa fa-chevron-right right" aria-hidden="true"></span> </p>
                                                                                                                            <p onclick="msg('3')" data-toggle="modal" data-target="#other-msg">AFC General Secretary's Message <span class="fa fa-chevron-right right" aria-hidden="true"></span> </p>
                                                                        
                                                                        </div>

                                                                        <div class="row no-gutters">
      <div class="col-lg-6 video-box">
        <img src="{{ asset('assets/img/president-img.png') }}" class="img-fluid" alt="President Image" style="margin-top:0%; margin-left:0%; height:200px; weight:70%"> -->
