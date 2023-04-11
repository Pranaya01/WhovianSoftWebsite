@extends('layouts.user.index')
@section('PageTitle', 'Home')
@section('user')
@include('user.include.header')

<section class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="header-section-moto col-xl-6 col-lg-6 col-md-6 col-12 toppadding-50 bottompadding-50 text-center" data-aos="zoom-in-down">
                <h1 class="font-weight-bold whitetext toppadding-50">Your All-in-One-Ecommerce Solutions</h1>
                <!-- <h4 class="blacktext">"Simplicity is the utmost sophistication"</h4> -->
                    <ul class="list-inline fa-ul text-center whitetext toppadding-20" style="margin-top:30px;">
                        <li class="list-inline-item header-li"><span class="fa-li"><i class="fa fa-check-square mr-2" style="font-size: 25px!important; color: #fffff!important;"></i></span>Grow Online</li>
                        <li class="list-inline-item header-li" style="vertical-align:middle;"><span class="fa-li"><i class="fa fa-check-square mr-2" style="font-size: 25px!important; color: #fffff!important;"></i></span>Stand Out</li>
                        <li class="list-inline-item header-li" style="vertical-align:middle; "><span class="fa-li"><i class="fa fa-check-square mr-2" style="font-size: 25px!important; color: #fffff!important;"></i></span>Maximize Profits</li>
                    </ul>
                <div class="header-buttons mt-5 toppadding-50">
                    <a href="{!! url('contact'); !!}">Join Us Today >> </a>
                </div>
            </div>

            <div class="header-section-image homepage-background-image col-xl-6 col-lg-6 col-md-6 col-12 text-center" data-aos="fade-left" style="background-image: url({{ URL::asset('assets/img/whoviansoft_home_page_it_service_provider_software_company_partner_for_growth.png') }})">

            </div>

        </div>
    </div>
</section>
<svg style="background-color:white;" width="100%" height="70" viewBox="0 0 100 100" preserveAspectRatio="none">
<path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#115dc1"></path>
</svg> 
<!-- ********************************** header over ******************************-->




<!-- ********************************** list of services starts ****************************** -->

<section class="ourservices toppadding-40 bottompadding-20" id="services">
    <div class="container headings text-center toppadding-20">
        <h2 class="font-weight-bold themeblue">Our Services</span></h2>
        <h3 class="blacktext">Grow your online business with Expert Insights & Best-in-Class Solutions</h3>
    </div>
    
    <div class="container mt-3 pt-5 toppadding-20">
    <div class="row bottompadding-40">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" id="amazon-services">
            <div class="box">
              <div class="row negativetopspace-20">
                <div class="col-md-12">
                    <h4 class="left-align">Amazon Services </h4>
                    <ul class="fa-ul">
                            <li class="list mt-1"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">Amazon A+ & Essential Content</p></li>
                            <li class="list mt-1"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">Amazon Images</p></li>
                            <li class="list mt-1"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >Amazon Brand Stores</p></li>
                            <li class="list mt-1"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >Amazon Search Advertising</p></li>
                        </ul>   
                    <p class=" toppadding-10">Expert strategies to Boost Sales & Streamline Ops for Amazon sellers. Make your experience easier - fast!</p>
                    <div class="default-buttons toppadding-30 float-right" >
                      <a href="{!! url('amazon-services'); !!}">More</a>
                    </div>
                    </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" id="ecommerce-service">
            <div class="box">
              <div class="row negativetopspace-20">
                <div class="col-md-12">
                <h4 class="left-align">Ecommerce Integration Services </h4>
                <ul class="fa-ul">
                    <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">Product Listing</p></li>
                    <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">Product Data Extraction</p></li>
                    <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >Product Data Cleansing</p></li>
                    <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >Product Category Management</p></li>
                    </ul>        
                <p class=" toppadding-10">Let us handle the nitty-gritty of e-commerce integration while you focus on what you do best selling your amazing products!</p>
                <div class="default-buttons toppadding-30 float-right" >
                      <a href="{!! url('ecommerce-service'); !!}">More</a>
                </div>
                </div>
              </div>
            </div>
          </div>

</div>
     
     <div class="row bottompadding-40">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" id="marketplace-service">
            <div class="box">
              <div class="row negativetopspace-20">
                <div class="col-lg-12">
                <h4 class="left-align">Marketplace Services</h4>
                <ul class="fa-ul">
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">E-commerce Strategy</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">E-commerce Content</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >ECommerce Advertising</p></li>
                    </ul>  
                <p class=" toppadding-10">Master e-commerce with our expert marketing and management insights!</p>
                <div class="default-buttons toppadding-40 float-right" >
                      <a href="{!! url('marketplace-service'); !!}">More</a>
                </div>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" id="web-design">
            <div class="box">
              <div class="row negativetopspace-20">
              <div class="col-lg-12">
                <h4 class="left-align">Web Design Services</h4>
                <ul class="fa-ul">
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">WordPress Website</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">E-commerce Website</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >PHP Website </p></li>
                    </ul>  
                <p class=" toppadding-10">Making websites: visually appealing & efficient. Boosting your business success.</p>
                <div class="default-buttons toppadding-40 float-right" >
                      <a href="{!! url('marketplace-service'); !!}">More</a>
                </div>
                </div>
                
              </div>
            </div>
          </div>

     </div>
     <!-- End Row -->
     <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" id="seo-service">
            <div class="box">
              <div class="row negativetopspace-20">
                <div class="col-md-12">
                <h4 class="left-align">SEO & SEM Services</h4>
                <ul class="fa-ul">
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">E-commerce Strategy</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">E-commerce Content</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >ECommerce Advertising</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >SEO Service</p></li>
                    </ul>    
                <p class=" toppadding-10">Don't get left behind in the digital race - trust us to get your website seen by the right people at the right time.</p>
                <div class="default-buttons toppadding-40 float-right" >
                      <a href="{!! url('seo-service'); !!}">More</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" id="product-management">
            <div class="box">
              <div class="row negativetopspace-20">
                <div class="col-md-12">
                <h4 class="left-align">Product Catalog Management </h4>
                <ul class="fa-ul">
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">Product Listing</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;">Product Data Extraction</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >Product Data Cleansing</p></li>
                        <li class="mt-1 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #1977cc!important;"></i></span><p style="text-align: left;" >Product Image Processing</p></li>
                    </ul>    
                <p class="toppadding-10">Hassle- free product management- so you can focus on what really matters, growing your business!</p>
                <div class="default-buttons toppadding-40 float-right" >
                      <a href="{!! url('catalogmanagement'); !!}" style="margin-top: 100px">More</a>
                </div>            
                 </div>
              </div>
            </div>
          </div>

     </div>
     <!-- End Row -->
     
    </div>

</section> 

<!-- ********************************** list of services ends ****************************** -->

<!-- ********************************** Why Us part starts ****************************** -->

<section id="whychooseus" class="services toppadding-40 bottompadding-20">
    <div class="container headings text-center toppadding-20">
        <h2 class="font-weight-bold themeblue">Why Choose Us?</span></h2>
        <h3 class="blacktext">What makes you go for Whoviansoft as your ultimate, pertinent and Reliable partner?</h3>
    </div>
    <div class="container-xl mt-3 pt-3 toppadding-20">
    <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch ">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-lightbulb-o" style="color: #43aed4!important;"></i></div>
              <h5 class="header-4">One-Stop- Solution </h5>
              <p class="paragraph-left">We're your one-stop shop for all things marketplace management. Be it web development, data entry, transcription, marketing, or conversion – you name it, we've got it covered.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money" style="color: #43aed4!important;"></i></div>
              <h5 class="header-4">Easy Affordable Services</h5>
              <p class="paragraph-left">Our services are easy and affordable, without compromising on quality. You'll get top-notch work done at a reasonable cost, without any hassle. hassle.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-users" style="color: #43aed4!important;"></i></div>
              <h5 class="header-4">Customer Centric Approach</h5>
              <p class="paragraph-left">We're all about putting you first. Our customer-centric approach means we're dedicated to meeting your specific requirements and providing excellent service..</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-database" style="color: #43aed4!important;"></i></div>
              <h5 class="header-4">Data Driven Solutions</h5>
              <p class="paragraph-left"> When it comes to solutions, we're all about the data. Our data-driven solutions are designed to help you get the most out of your marketplace, with insights and strategies tailored to your unique needs.</p>
            </div>
          </div>

        </div>


    </div>
</section> 
<section class="toppadding-40 bottompadding-40">
<div class="container my-3">
  <div class="text-center mb-3">
  <h2 class="font-weight-bold themeblue toppadding-20">News</span></h2>
  <h3 class="blacktext">Latest News from Whoviansoft</h3>
  </div>
  <div class="row toppadding-20">
  @forelse( $news_details as $news )
    <div class="col-md-4 p-4">
      <div class="border">
        <div class="position-relative w-100" style="height: 250px;background-image: url({{url('images/news', $news->image)}}); background-size: cover; background-position: center;">
          <div class="position-absolute bg-dark" style="opacity: .3; top: 0; left:0; right: 0; bottom: 0;"></div>
          <p class="position-absolute px-3 py-2 text-white" style="bottom:10px; left: 10px; background-color: #1977cc;"><small>{{ $news->news_category }}</small></p>
        </div>
        <div class="px-3 pt-4 pb-3">
        <h4 class="text-dark themered" style="font-weight: 600; font-size: 16px;"><a href="{{ route('article.show', $news->id) }}">{{ $news->news_title }}</a></h4>
          <p class="paragraph-left">{{ Str::limit($news->news_description, 40) }}</p>
          <div class="d-flex mt-4">
            <div class="d-flex align-items-center mr-4">
            <svg height="18px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Icons" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
            <path d="M16,2C8.3,2,2,8.3,2,16s6.3,14,14,14s14-6.3,14-14S23.7,2,16,2z M23,17h-7c-0.6,0-1-0.4-1-1V7c0-0.6,0.4-1,1-1s1,0.4,1,1v8  h6c0.6,0,1,0.4,1,1S23.6,17,23,17z"/>
            </svg>

              <p class="mt-3" style="color: #1977cc;">{{ $news->date }}</p>
            </div>
            <div class="d-flex align-items-center mr-4">
            <svg height="18px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:serif="http://www.serif.com/" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="Icon"><circle cx="12" cy="7" r="5.75"/><path d="M21.25,21c-0,0.966 -0.783,1.75 -1.75,1.75l-15,-0c-0.967,-0 -1.75,-0.784 -1.75,-1.75c-0,-4.28 3.47,-7.75 7.75,-7.75l3,0c4.28,0 7.75,3.47 7.75,7.75Zm-0.729,0.729c-0.013,0.005 -0.021,0.011 -0.021,0.021l0.021,-0.021Z"/></g></svg>
              <p class="mt-3" style="color: #1977cc;">{{ $news->user_name->name }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @empty
          <h5>Sorry, No Data Found!!</h5>
          @endforelse
    <div class="default-buttons mt-3">
        <div class="float-right">
            <a href="{!! url('article'); !!}" style="border-radius: 100px;">Read More</a>
        </div>
    </div>          
  </div>
</div>

</section>
<!-- ********************************** Why Us part ends ****************************** -->

<!-- ********************************** Projects worked starts ****************************** -->

<!-- <section>
        <div class="container-fluid project-work toppadding-50 bottompadding-50 lighgreybg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-2 text-right">
                                <i class="fa fa-briefcase themered counticon"></i>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-10 text-left">
                                <span class="count">2000</span>
                                <h3>Projects Completed</h3>
                            </div>
                        </div>

                    </div>
                        <div class="proectcountdiv col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-2 text-right">
                                    <i class="fa fa-product-hunt themered counticon"></i>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-10 text-left">
                                    <span><span class="count">700</span> K+</span>
                                    <h3>SKUs Processed</h3>
                                </div>
                            </div>

                        </div>
                        <div class="proectcountdiv col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-2 text-right">
                                    <i class="fa fa-users themered counticon"></i>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-10 text-left">
                                    <span class="count">500</span>
                                    <h3>Employees Placed</h3>
                                </div>
                            </div>
                        </div>
                        <div class="proectcountdiv col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-2 text-right">
                                    <i class="fa fa-search-plus themered counticon"></i>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-10 text-left">
                                    <span class="count">100</span>
                                    <h3>Quality & Reliability</h3>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </section>  -->

<!-- ********************************** Projects worked ends ****************************** -->

 
<section>
    <div class="container-fluid whitebg toppadding-50 bottompadding-50">
        <div class="container">
            <div class="row">
                <div class="container headings text-center">
                <h2 class="font-weight-bold themeblue header-2">Platforms We Support</span></h2>
                </div>
                <div class="col-lg-12 col-md-12 col-12 toppadding-20">
                    <div class="carousel" data-flickity='{ "groupCells": 2, "autoPlay": true, "wrapAround": true}'>
                        <div class="carousel-cell toppadding-10">
                            <img src="{{ asset('assets/img/woocommerce_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/bigcommerce_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/shopify_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/amazon_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/ebay_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/walmart_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/homedepot_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/whoviansoft_etsy_catalog_management_service_300x300.png') }}">
                        </div>
                        <div class="carousel-cell toppadding-20">
                            <img src="{{ asset('assets/img/whoviansoft_houzz_catalog_management_service_300x300.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section id="partnership-model" class="toppadding-50 bottompadding-20">
    <div class="container toppadding-20">
        <div class="container headings text-center">
        <h2 class="font-weight-bold themeblue">Partnership Models</span></h2>
        <h3 class="blacktext bottompadding-40">We provide flexible business models to meet your diverse business needs. Choose the one that suits you.</h3>
        </div>
        <div class="row toppadding-20">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card text-center p-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/whoviansoft_dedicated_resource_model_virtual_assistant.png') }}" alt="whoviansoft inc dedicated resource model virtual assistant for your service at low cost" style="width:200px;">
                    </div>
                    <h4 class="font-weight-bold themered">Dedicated Resource Model (DRM)</h4>
                    <p>In this model, we provide you with dedicated number of skilled professionals and infrastructure
                        as per your requirement. The assigned resource will work exclusively for your project. It's like having your own remote virtual assistant.
                        </p>
                    <h4 class="toppadding-30 text-left">Why choose this model?</h4>
                    <ul class="fa-ul text-left themered">
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>For full control of project and resources</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Hassle free resource management</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Resource at reasonable price</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card text-center p-5 cardspace">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/whoviansoft_project_based_model_projectplan_time_estimation.png') }}" alt="whoviansoft inc project based model project planning timeline estimation low risk low cost model" style="width:200px;">
                    </div>
                    <h4 class="font-weight-bold themered">Project Based Model (PBM)</h4>
                    <p class="paragraph-left">Optimized and low risk model if you have definite work scope and know your end result. Our team collaborate with you to gather
                        project requirement and prepare a project plan with estimated timeline. We work on mutually agreed project.
                    </p>
                    <h4 class="toppadding-30 text-left">Why choose this model?</h4>
                    <ul class="fa-ul text-left themered">
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Fixed time line</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Project based billing</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Know your end result</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> 
<section id="about_us" class="toppadding-40 bottompadding-30">
    <div class="container-fluid whitebg toppadding-20">
        <div class=" aboutuscard mt-5">
            <div class="container rightpadding-20 leftpadding-20" style="width:100%;">
                <div class="card-header text-center whitebg">
                <h2 class="font-weight-bold themeblue">About Us</span></h2>
                <h3 class="blacktext">What makes you go for Whoviansoft as your ultimate, pertinent and Reliable partner</h3>
                </div>
                <div class="container card">
                <div class="card-body toppadding-20">
                    <p class="card-text">We go above and beyond to simplify the lives of our clients, whether they're a brand, retailers, or digital agencies looking to improve their global reach. </p>
                    <p class="card-text">We are a team of digital analysts, web developers, SEO and SEM technicians, project managers, and Marketplace specialists. We help our clients to improve their corporate websites, manage the marketplace or create new projects. </p>
                    <p class="card-text">Our team of passionate experts believes in simplicity and agility, delivering versatile technology solutions that are tailored to your specific needs. With decades of experience and a focus on client needs, we have helped countless businesses achieve success through innovative solutions and flawless execution.  </p>
                    <p class="card-text">You can trust us to deliver world-class services and solutions! </p>
                </div>
            </div>
                </div>
                </div>
        </div>
    </div>
</section>

    <footer id="footer">

<div class="footer-newsletter" id="newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4 class="header-4">Stay updated</h4>
        <p class="paragraph">with the latest insights, news, and resources</p>
        <form action="{{route('subscribe')}}" method="post">
          @csrf
         
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
        <div class="formrow row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                @if(session('status'))
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success ! </strong>  &nbsp; {{ session('status') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="container">
                                @if($messages = Session::get('Success'))
                                <div class="alert alert-success">
                                    <p align="center">{{$messages}}/p>
                                </div>
                                @endif

                                @if($messages = Session::get('error'))
                                <div class="alert alert-danger">
                                    <p align="center">{{$messages}}</p>
                                </div>
                                @endif
                                </div>
                            </div>
      </div>
    </div>
  </div>
</div>
            </footer>


<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@include('user.include.contact')
@include('user.include.footer')
@stop
