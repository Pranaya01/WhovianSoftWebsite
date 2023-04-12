@extends('layouts.user.index')
@section('PageTitle', 'Web Design Services')
@section('user')
@include('user.include.header')

<section class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="header-section-moto col-xl-6 col-lg-6 col-md-6 col-12 toppadding-50 bottompadding-50 text-center" data-aos="zoom-in-down">
                <h1 class="font-weight-bold whitetext toppadding-50">Helping you bring your website vision to life!</h1>
                <p class="font-weight-bold themered whitetext paragraph toppadding-40">We specialize in creating stunning and functional websites to help businesses thrive</p>
                <div class="header-buttons mt-5 toppadding-50">
                    <a href="{!! url('contact'); !!}">Join Us Today >> </a>
                </div>
            </div>

            <div class="header-section-image homepage-background-image col-xl-6 col-lg-6 col-md-6 col-12 text-center" data-aos="fade-left" style="background-image: url({{ URL::asset('assets/img/amazon-services.png') }})">

            </div>

        </div>
    </div>
</section>
<svg style="background-color:white;" width="100%" height="70" viewBox="0 0 100 100" preserveAspectRatio="none">
<path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#115dc1"></path>
</svg> 
<!-- ********************************** header over ******************************-->

<section>
    <div class="container-fluid background-white toppadding-40 bottompadding-20">
        <div class="container toppadding-20">
            <div class="text-center">
                <h2 class="font-weight-bold themered">Web Design Services</h2>
            </div>
            <div class="row toppadding-20">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <p class="paragraph-left">Your website is the face of your business online. It should not only be visually appealing but also functional and user-friendly. </p>
                    <p class="paragraph-left">At Whoviansoft, we specialize in crafting websites that not only look great but also drive results. Whether you need a simple brochure website or a complex e-commerce platform, we have the skills and expertise to bring your vision to life. Our team of talented designers and developers work closely with you to create a website that truly represents your brand and provides an exceptional user experience to your customers.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="whychooseus" class="services bottompadding-50">
    <div class="container-xl mt-5 pt-5">
    <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-lightbulb-o" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered"> SEO Optimized Website </h4>
              <p class="box-paragraph">Our team builds your website from scratch, using the latest SEO best practices. We ensure it captures all the crucial details about your products, services, and company culture. With our conversion-optimized design and user experience, your website won't just attract visitors but also turn them into valuable leads.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered">Mobile-friendly, Responsive design</h4>
              <p class="box-paragraph">Our mobile-responsive designs guarantee that your website looks great and works seamlessly, no matter what device your customers use. Also, we will help you guide your visitors with a clear CTAs to help them find what they need and boost your conversion. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-users" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered">Full Service Web Design Services</h4>
              <p class="box-paragraph">Our custom web design service makes sure your website is visually stunning, easy to use, and optimized for success. With our digital marketing expertise, we can create a website with advanced functionality, including eCommerce, forums, and event registrations. If you need high-quality content that tells your brand story and attracts traffic, we've got that covered too. </p>
            </div>
          </div>

        </div>
    
    </div>
</section> 

<!-- ======= Why Choose us Section ======= -->
<section id="choose-us" class="choose-us b toppadding-40">
      <div class="container" data-aos="fade-up">

      <div class="text-center">
                <h2 class="font-weight-bold themered"> Why Choose Whoviansoft For Web Design Service?</h2>
                <!-- <h4 class="font-weight-bold text-uppercase header-4">Focus on what you do best– Selling your amazing products!</h4> -->
            </div>

        <div class="row toppadding-10 bottompadding-50">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money"></i></div>
              <h4 class="header-4 themered">Easy Affordable Services</h4>
              <p class="box-paragraph">Our services are easy and affordable, without compromising on quality. You'll get top-notch work done at a reasonable cost, without any hassle.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-user"></i></div>
              <h4 class="header-4 themered">Customer Centric Approach</h4>
              <p class="box-paragraph">We're all about putting you first. We're dedicated to meeting your specific requirements and providing excellent service</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-database"></i></div>
              <h4 class="header-4 themered">Data Driven Solutions</h4>
              <p class="box-paragraph">When it comes to solutions, we're all about the data. Get the most out of your marketplace, with strategies tailored to your unique needs.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
@include('user.include.contact')
@include('user.include.footer')
@stop