@extends('layouts.user.index')
@section('PageTitle', 'Product Catalog Management')
@section('user')
@include('user.include.header')

<section class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="header-section-moto col-xl-6 col-lg-6 col-md-6 col-12 toppadding-50 bottompadding-50 text-center" data-aos="zoom-in-down">
                <h1 class="font-weight-bold whitetext toppadding-50">Don't let messy data drive your customers away!</h1>
                <p class="font-weight-bold themered whitetext paragraph toppadding-40">We help organize your product catalog efficiently with our expert management service</p>
                <div class="header-buttons mt-5 toppadding-50">
                    <a href="{!! url('contact'); !!}">Join Us Today >> </a>
                </div>
            </div>

            <div class="header-section-image homepage-background-image col-xl-6 col-lg-6 col-md-6 col-12 text-center" data-aos="fade-left" style="background-image: url({{ URL::asset('assets/img/catalog_management.png') }})">

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
        <div class="container toppadding-20">
            <div class="text-center">
                <h2 class="font-weight-bold themered">Product Catalog Management</h2>
            </div>
            <div class="row toppadding-20">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <p class="paragraph">Juggling between managing your business and keeping your product catalog up to date is a real headache. It takes a lot of time and effort to keep track of inventory and ensure that everything is organized and up-to-date.</p>
                    <p class="paragraph">We understand the struggle!</p>
                    <p class="paragraph">Our team of professionals at Whoviansoft specialize in helping manufacturers and online retailers streamline their catalog management process. We ensure your products are organized according to their unique attributes across a full catalog of SKUs. Our team is efficient at keeping your product information up-to-date, accurate, and organized, ensuring consistent navigation, and enhances user experience.</p>
                    <p class="paragraph">Let Whoviansoft take the hassle of managing your inventory, so you can get back to doing what you love!</p>

                </div>

            </div>
        </div>
    </div>
</section>
<section id="whychooseus" class="services toppadding-40 bottompadding-20">
<div class="container toppadding-20">
            <div class="text-center">
                <h2 class="font-weight-bold themered">Catalog Management Scope</h2>
            </div>
</div>
    <div class="container-xl mt-3 pt-3 toppadding-20">
    <div class="row toppadding-30">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-list " style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered"> Product Listing </h4>
              <p class="box-paragraph">Product listing is the cornerstone to online sales. We understand updating your existing products is daunting when you are busy with marketing. </p>
              <p class="box-paragraph">That’s why, our expert service takes care of everything from correcting errors to restocking inventory, so you don't have to. With our help, you can focus on what you do best - marketing your amazing products and growing your business!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered">Product Data Extraction</h4>
              <p class="box-paragraph">Don't let the lack of product information or multiple formats stop you from creating an amazing Ecommerce store! </p>
              <p class="box-paragraph">At Whoviansoft, our expert catalog management team can mine product catalogs from any accessible source - whether it's the manufacturer's website or vendors' databases irrespective of it’s location and format. We help you organize and create a comprehensive catalog for your online store. </p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-users" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered">Product Data Cleansing</h4>
              <p class="box-paragraph">Regular data cleanup keeps your online store in order. With our product data cleansing service, we ensure that your catalog data is always up-to-date, so your customers have access to accurate information. </p>
            </div>
          </div>

        </div>
        <div class="row toppadding-50">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-lightbulb-o" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered">Product Image Processing</h4>
              <p class="box-paragraph">75% of online shoppers make their buying decision based on product image. </p>
              <p class="box-paragraph">At Whoviansoft, our team of experts understand platform requirements and process images accordingly. We ensure your image meets potentially required image attributes to boost the SEO of your products and images for maximum impact and sales.</p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered">Product Category Management</h4>
              <p class="box-paragraph">A well-organized and easy to navigate product catalog is the key to seamless shopping experience. That's where our expert product catalog management service comes in! </p>
              <p class="box-paragraph">We'll take your catalog to the next level categorizing your products and arranging subcategories, making it a breeze for your visitors to find exactly what they need.</p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-users" style="color: #43aed4!important;"></i></div>
              <h4 class="header-4 themered">Inventory Management</h4>
              <p class="box-paragraph">Our expert team will track your inventory levels in-real time, making sure you never run out of stock and miss out on potential sales. With our help, you can focus on growing your business and delivering the best possible customer experience.</p>
            </div>
          </div>

        </div>

    </div>
</section> 

<section class="toppadding-40 bottompadding-20">
    <div class="container">
                <div class="text-center">
                    <h2 class="font-weight-bold toppadding-20 themered"> Catalog Management Process</h2>
                </div>
    </div>
    <section class="toppadding-20">

    <ul class="process">
      <li class="process__item">
        <span class="process__number">1</span>
        <span class="process__title">Research</span>
        <span class="process__subtitle">Our specialists from Whoviansoft assess store performance, plan, and requirements to determine next steps.</span>
      </li>

      <li class="process__item">
        <span class="process__number">2</span>
        <span class="process__title">Scope Definition</span>
        <span class="process__subtitle">After research, the on-boarding team defines and prioritizes the required tasks for your Ecommerce store's growth.</span>
      </li>

      <li class="process__item">
        <span class="process__number">3</span>
        <span class="process__title">Project Planning</span>
        <span class="process__subtitle">We structure resource and time line estimation to ensure a smooth, timely, and cost-effective project delivery.</span>
      </li>

      <li class="process__item">
        <span class="process__number">4</span>
        <span class="process__title">Project Management</span>
        <span class="process__subtitle">After verifying the project plan with your team, we'll start working and communicate with you regularly for feedback.</span>
      </li>
    </ul>
                          

    </section>

    </div>
</section>

<section>
    <div class="container-fluid whitebg toppadding-10 bottompadding-20">
        <div class="container toppadding-5">
            <div class="row">
                <div class="container headings text-center">
                <h2 class="font-weight-bold themeblue">Platforms we support</span></h2>
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

<!-- ======= Why Choose us Section ======= -->
<section id="choose-us" class="choose-us toppadding-80 bottom-padding-50">
      <div class="container" data-aos="fade-up">
            <div class="container headings text-center toppadding-20">
                <h2 class="font-weight-bold themeblue">Why Choose Whoviansoft For Product Catalog Management Service?</h2>
                </div>

        <div class="row toppadding-20 bottom-padding-20">
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
