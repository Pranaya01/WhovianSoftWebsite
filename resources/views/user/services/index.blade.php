@extends('layouts.user.index')
@section('PageTitle', 'Services')
@section('user')
@include('user.include.header')

 
<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Services</h2>
      <ol>
        <li><a href="{!! url(''); !!}">Home</a></li>
        <li>Services</li>
      </ol>
    </div>

  </div>
  
</section><!-- End Breadcrumbs Section -->

      <div class="w3-container w3-teal">
  </div>

  <div class="w3-content">

  <div class="w3-row w3-margin">

  <div class="w3-third">
    <img src="{{ asset('images/service-1.jpg') }}" style="width:100%;min-height:200px">
  </div>
  <div class="w3-twothird w3-container">
    <h2>Program for Organizations </h2>
    <p>
    In an organizational setting, when issues of diversity are addressed, it creates more productive work. This helps to build DEI lenses at the workplace. With this service, we aim to enable organizations to better their DEI framework, and recommend practices  to build fair and equitable co-working space.
    </p>
  </div>

  </div>
  <div class="w3-row w3-margin">

  <div class="w3-third">
    <img src="{{ asset('images/service-2.jpg') }}" style="width:100%;min-height:200px">
  </div>
  <div class="w3-twothird w3-container">
    <h2>Self-paced learning </h2>
    <p>
    By signing up for our self-paced learning service, you can enroll into our online course to learn about DEI and complete the course as your own feasibility. The course is designed by our professional DEI Educators.
    </p>
  </div>

  </div>
  <div class="w3-row w3-margin">

  <div class="w3-third">
    <img src="{{ asset('images/service-3.jpg') }}" style="width:100%;min-height:200px">
  </div>
  <div class="w3-twothird w3-container">
    <h2>Diversity Equity Inclusion Audit </h2>
    <p>
    Our Diversity, Equity, and Inclusion (DEI) Audit will help organizations understand where they are now to craft strategies, policies, and frameworks to reach their optimal DEI goals. Our process for the Audit includes:
  </p>
  <p>
  Get To Know Meeting>>> Desk Review of the organization's policies, culture, and initiatives >>> One on One and Group Interviews >>> External DEI Audit >>> Vision Mapping Workshop
  </p>
  </div>

  </div>
  
  

</main><!-- End #main -->


<div id="preloader"></div>
@include('user.include.contact')
@include('user.include.footer')
@stop