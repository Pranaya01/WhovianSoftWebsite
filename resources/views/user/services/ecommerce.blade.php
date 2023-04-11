@extends('layouts.user.index')
@section('PageTitle', 'Ecommerce Integration Services')
@section('user')
@include('user.include.header')


<section class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="header-section-moto col-xl-6 col-lg-6 col-md-6 col-12 toppadding-50 bottompadding-50 text-center" data-aos="zoom-in-down">
                <h1 class="font-weight-bold whitetext toppadding-50">Making Amazon Less Stressful and More Profitable!</h1>
                <p class="font-weight-bold themered whitetext paragraph toppadding-40">We expertly manage, craft content and build brand awareness to channel growth</p>
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
                <h2 class="font-weight-bold themered">Ecommerce Integration Services</h2>
                <p class="paragraph">We specialize in providing top-notch integration solutions for your Ecommerce business. Our team of experts offers a wide range of services, including seamless integration with popular platforms, ERP, third party and Google integrations. With our services, you can optimize your online store's efficiency and improve your customer experience, ultimately increasing your sales and revenue. </p>
            </div>
        </div>
    </div>
</section>


<section class="d-flex align-items-center toppadding-40 bottompadding-20">

<div class="container">
  <div class="row">
  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('assets/img/Ecommerce & Content Integration.jpg') }}" class="img-fluid animated" alt="">
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h2 class="header-2 font-weight-bold themered">Ecommerce & Content Integration</h2>
      <p class="paragraph left-align">Connect your digital storefront with any CMS to capitalize on the opportunity to influence buying decisions and drive sales.</p>
    </div>
  </div>
</div>

</section>
<section class="d-flex align-items-center toppadding-40 bottompadding-20">

<div class="container">
  <div class="row">
  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="200">
      <h2 class="header-2 font-weight-bold themered">Ecommerce + ERP Integration</h2>
      <p class="paragraph left-align">Connecting your ecommerce platform with ERP systems can be a daunting and costly task. Our integration experts understand the challenges and complexities involved. With our specialized skills, we can architect integration solutions to seamlessly connect your digital storefront with any ERP systems - quickly and cost-effectively.</p>
    </div>
  <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('assets/img/ERP Integration.jpg') }}" class="img-fluid animated" alt="">
    </div>
    
  </div>
</div>

</section>
<section class="d-flex align-items-center toppadding-40 bottompadding-20">

<div class="container">
  <div class="row">
  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h2 class="header-2 font-weight-bold themered">Ecommerce & Third- Party Integrations</h2>
      <p class="paragraph left-align">Our team utilizes proven methodologies, technical expertise, and deep integration experience to seamlessly connect all your tools, including CRM, email automation, and chat to optimize your digital operations. </p>
    </div>
  <div class="col-lg-6 order-2 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('assets/img/Ecommerce & Third- Party Integrations.jpg') }}" class="img-fluid animated" alt="">
    </div>
    
  </div>
</div>

</section>
<section class="d-flex align-items-center toppadding-40 bottompadding-20">
 
<div class="container">
  <div class="row">
  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="200">
      <h2 class="header-2 font-weight-bold themered">Ecommerce- Google Services Integrations</h2>
      <p class="paragraph left-align">Seamlessly integrate your digital storefront with Google Services. Our team of professionals are well-equipped to help you gather valuable insights and drive growth. With our expertise, you can leverage Google's suite of tools to optimize your e-commerce platform, from analytics to advertising and everything in between. </p>
    </div>
  <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="zoom-in" data-aos-delay="200">
  <img src="{{ asset('assets/img/Intregrations_.jpg') }}" class="img-fluid animated" alt="">
    </div>
    
  </div>
</div>

</section>

<!-- ======= Why Choose us Section ======= -->
<section id="choose-us" class="choose-us b toppadding-80">
      <div class="container" data-aos="fade-up">

        <div class="text-center">
        <h2 class="font-weight-bold themered"> Why Choose Whoviansoft For Ecommerce Integration Service?</h2>

        </div>

        <div class="row toppadding-10 bottompadding-50">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-database"></i></div>
              <h4 class="header-4 themered">Data Security</h4>
              <p class="box-paragraph">We keep client confidentiality and data security at forefront. You can rest assured knowing your data will not be shared with anyone.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="header-4 themered">Quick Turnover Time</h4>
              <p class="box-paragraph">Our turnover time is fast and efficient- it usually takes just a few……</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-file-text"></i></div>
              <h4 class="header-4 themered">Reliable reporting</h4>
              <p class="box-paragraph">We keep you informed every step of the way with daily, weekly, or monthly reports. </p>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-shopping-cart"></i></div>
              <h4 class="header-4 themered">Ecommerce Specialists</h4>
              <p class="box-paragraph">Our expert product catalog management team is a group of seasoned industry experts who know the ins and outs of all the latest industry norms. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money "></i></div>
              <h4 class="header-4 themered">Easy Affordable Services</h4>
              <p class="box-paragraph">Our services are easy and affordable, without compromising on quality. You'll get top-notch work done at a reasonable cost, without any hassle.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-user"></i></div>
              <h4 class="header-4 themered">Customer Centric Approach</h4>
              <p class="box-paragraph">We're all about putting you first. We're dedicated to meeting your specific requirements and providing excellent service.</p>
            </div>


        </div>

      </div>
    </section><!-- End Services Section -->



<div id="preloader"></div>
@include('user.include.contact')
@include('user.include.footer')
@stop

