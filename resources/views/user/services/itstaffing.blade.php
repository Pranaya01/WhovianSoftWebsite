@extends('layouts.user.index')
@section('PageTitle', 'IT Staffing')
@section('user')
@include('user.include.header')

<section class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="header-section-moto col-xl-6 col-lg-6 col-md-6 col-12 toppadding-50 bottompadding-50 text-center" data-aos="zoom-in-down">
                <h1 class="font-weight-bold whitetext toppadding-50">Right placement of skilled IT personnel is our passion</h1>
                <p class="font-weight-bold themered whitetext paragraph toppadding-40">We help you streamline your recruitment process</p>
                <div class="header-buttons mt-5 toppadding-50">
                    <a href="{!! url('contact'); !!}">Join Us Today >> </a>
                </div>
            </div>

            <div class="header-section-image homepage-background-image col-xl-6 col-lg-6 col-md-6 col-12 text-center" data-aos="fade-left" style="background-image: url({{ URL::asset('assets/img/whoviansoft_it_staffing_employeers_us_based_recruitment.png') }})">

            </div>

        </div>
    </div>
</section>
<svg style="background-color:white;" width="100%" height="70" viewBox="0 0 100 100" preserveAspectRatio="none">
<path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#115dc1"></path>
</svg> 
<!-- ********************************** header over ******************************-->

<section>
    <div class="container-fluid whitebg toppadding-40 bottompadding-20">
        <div class="container">
            <div class="text-center">
                <h2 class="font-weight-bold text toppadding-20"> <Span class="themered">It Staffing </Span>Service</h2>
            </div>
            <div class="row toppadding-20">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <p class="paragraph-left">IT Staffing Services provide the extra talent needed to boost your projects, from fully managed teams to individual expert Engineers. </p>
                    <p class="paragraph-left toppadding-10">Our IT staff works hand-in-hand with your in-house team by participating in daily meetings and reporting directly to your management area. From simple prototypes to full-scale enterprise software, we have a custom-built solution for you.</p>
                    <p class="paragraph-left toppadding-10">At Whoviansoft, we take the time to truly understand our clients' needs and career aspirations, giving us a unique perspective on the intersection of talent and business. As a leading IT staffing firm, we pride ourselves on finding the right people at the right time, wherever and whenever you need them. </p>
                    <p class="paragraph-left toppadding-10">From screening candidates to finding the perfect match for your project, we've got the skills and expertise to help you achieve success!</p>

                </div>
                <section>
                  <div class="amazonfacts background-white container-fluid toppadding-40 bottompadding-20">
                      <div class="container-fluid">
                          <div class="text-center">
                              <h2 class="font-weight-bold text toppadding-20">Benefit of <Span class="themered">IT Staffing</Span></h2>
                          </div>
                          <div class="row toppadding-20" >
                              <div class="col-xl-4 col-lg-2 col-md-2 col-12 text-right" data-aos="fade-right">
                                  <!-- <div>
                                      <img src="{{ asset('assets/img/amazon_300x300.png') }}" alt="John Doe" style="width:100px;">
                                  </div> -->
                              </div>
                              <div class="col-xl-8 col-lg-10 col-md-10 col-12 text-left pl-5" data-aos="fade-left">
                                  <ul class="fa-ul">
                                    <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Access to Top IT Talent</li>
                                    <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Optimized Workloads</li>
                                    <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Industry Expertise</li>
                                    <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Minimal Risks</li>
                                    <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Faster Launch Times</li>
                                    <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>High- Quality Products</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
                          

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid whitebg toppadding-40 bottompadding-30">
        <div class="container">
            <div class="card pt-5 pb-5 pl-4 pr-4">
                <div class="toppadding-20">

                    <h1 class="font-weight-bold text"><Span class="themered">Employers</Span></h1>
                </div>
                <h4 class="header-4" style="text-align:left"> <span class="themegreen header4">Tired of working with staffing companies that just don't understand your business requirements?</span></h4>

                <p class="paragraph-left">Let our experienced technical recruiting team find the perfect match for your project with our guarantee of providing you with only the best IT talent.</p>
                <p class="paragraph-left">Stop searching for the perfect talent and partner with us!</p>

                <div>
                    <h4 class="header-2 themered">Let's Discuss your requirement</h4>
                </div>
                <div class="header-buttons mt-5">
                    <a href="{!! url('contact'); !!}">Contact Us</a>
                </div>

            </div>

        </div>

        <div class="container toppadding-50 bottompadding-50">
            <div class="card pt-5 pb-5 pl-4 pr-4">
                <div class="bottompadding-20">
                    <h1 class="font-weight-bold text text-right"><Span class="themered">Job Seekers</Span></h1>
                </div>
                <h4 class="header-4" style="text-align:right"> <span class="themegreen header4">Looking for a job that offers flexibility and opportunities to develop your skills? </span></h4>

                <div>
                    <p class="paragraph-right">We specialize in finding roles and projects that fit you the most, so you can grow your IT career in the direction you want. </p>
                    <p class="paragraph-right">Let's work together to find the best employer for you! </p>

                </div>
                <div class="header-buttons mt-5 text-right">
                    <a href="{!! url('contact'); !!}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======= Why Choose us Section ======= -->
<section id="choose-us" class="choose-us b toppadding-10">
      <div class="container" data-aos="fade-up">

      <div class="text-center">
      <h2 class="font-weight-bold themered"> Why Choose Whoviansoft For IT Staffing Service?</h2>
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
