@extends('layouts.user.index')
@section('PageTitle', 'Contact Us') 
@section('user')
@include('user.include.header')

<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Contact Us</h2>
      <ol>
        <li><a href="{!! url(''); !!}">Home</a></li>
        <li>Contact Us</li>
      </ol>
    </div>

  </div>
  
</section><!-- End Breadcrumbs Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

       <!-- <div class="section-title">
          <h2 style="text-align:center; font-family: Open Sans; font-weight: 700; font-size: 30px; color: #0563bb;">Contact Us</h2>
        </div> -->

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Nil-Saraswati Marg, Lazimpat, Kathmandu, Nepal</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info.myleadershipcompass@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>01-4433631</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form method="POST" action="{{ action('ContactController@saveContact') }}" class="php-email-form">
            @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write some message
                " placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <button type="submit"class="btn btn-primary">Send Message</button>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
 


</main><!-- End #main -->

<div id="preloader"></div>
@include('user.include.footer')
@stop