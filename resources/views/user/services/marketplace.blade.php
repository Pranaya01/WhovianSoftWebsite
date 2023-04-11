@extends('layouts.user.index')
@section('PageTitle', 'Marketplace Management Services')
@section('user')
@include('user.include.header')

<section class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="header-section-moto col-xl-6 col-lg-6 col-md-6 col-12 toppadding-50 bottompadding-50 text-center" data-aos="zoom-in-down">
                <h1 class="font-weight-bold whitetext toppadding-50">Don’t Let Lack of Tools Hold You Back From Success</h1>
                <p class="font-weight-bold themered whitetext paragraph toppadding-40">We simplify marketplace management to help seize your place in the market </p>
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
                <h2 class="font-weight-bold themered">Marketplace Management Service</h2>
            </div>
            <div class="row toppadding-20">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <p class="paragraph-left">In today's fast-paced world of eCommerce, staying ahead of the curve is crucial for sellers. Without the right tools, adapting to the constantly evolving landscape can be a daunting challenge. Our marketplace management services offer cutting-edge solutions that will keep your store at the forefront. By integrating with multiple marketplaces, we'll cement your store into an expanding selling ecosystem, giving you the tools you need to adapt and thrive in today's competitive market. </p>
                    <p class="paragraph-left toppadding-30">From Walmart.com to other top retailers including eBay, Shopify & more, brands worldwide trust us for our savvy strategies across a number of retail sites.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="whychooseus" class="services toppading-30 bottompadding-20">
    <div class="container-xl mt-5 pt-5">
    <div class="row bottompadding-50">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-lightbulb-o" style="color: #43aed4!important;"></i></div>
              <h3> Product Listing </h3>
              <p class="box-paragraph">We'll select the perfect listing category or create customized item listings for your unlisted items. Our team crafts catchy titles that capture your product's essence and creates compelling product descriptions with eye-catching image. Sit back and relax as we take care of your marketplace listings, leaving you with more time to focus on growing your business.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money" style="color: #43aed4!important;"></i></div>
              <h3>Product Image Editing and Uploading</h3>
              <p class="box-paragraph">We offer Ecommerce image editing and services to best showcase your products. Our experts can customize your images for thumbnail, normal, and zoom-in views, ensuring they're high-resolution, focused, bright, and have optimal file size for quick page downloads. Plus, we'll make sure your images have a clear or white background, making them stand out and look professional. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-users" style="color: #43aed4!important;"></i></div>
              <h3>Product Description</h3>
              <p class="box-paragraph">Detailed and accurate information on product information page is crucial to attract your target audience and increasle sales. Our team of experts specializes in crafting detailed and accurate descriptions that will grab your customers' attention and boost your sales. </p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-lightbulb-o" style="color: #43aed4!important;"></i></div>
              <h3>Inventory Management  </h3>
              <p class="box-paragraph">We'll keep you in the loop on all the vital details for your items, including restock dates and lead times required for shipping after an order is placed. With our help, you can seamlessly list your items on the marketplaces of your choice, and provide your customers with accurate information, ensuring their satisfaction.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money" style="color: #43aed4!important;"></i></div>
              <h3>Order Processing</h3>
              <p class="box-paragraph">Let us take the hassle of order processing out of your hands. Our expert team can help you with everything from checking item availability to tracking customer credit positions, generating invoices, and providing order status reports.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-users" style="color: #43aed4!important;"></i></div>
              <h3>Channel Analytics</h3>
              <p class="box-paragraph">Our services provide in-depth channel insights and conversion path analysis to help you make informed decisions and improve your promotional efforts. </p>
            </div>
          </div>

        </div>



    </div>
</section> 

<section>
    <div class="container-fluid whitebg toppadding-30 bottompadding-20">
        <div class="container toppadding-20">
            <div class="row">
                <div class="container headings text-center">
                <h2 class="font-weight-bold themeblue header-2">Platforms we support</span></h2>
                </div>
                <div class="col-lg-12 col-md-12 col-12 toppadding-20">
                    <div class="carousel" data-flickity='{ "groupCells": 1, "autoPlay": true, "wrapAround": true}'>
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
 <section id="choose-us" class="choose-us b toppadding-80">
      <div class="container" data-aos="fade-up">

      <div class="text-center">
      <h2 class="font-weight-bold themered"> Why Choose Whoviansoft For Market Place Management Service?</h2>
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
            <div class="icon"><i class="fa fa-file-text"></i></div>
              <h4 class="header-4 themered">Reliable reporting</h4>
              <p class="box-paragraph">We keep you informed every step of the way with daily, weekly, or monthly reports. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-shopping-cart"></i></div>
              <h4 class="header-4 themered">Marketplace Specialists</h4>
              <p class="box-paragraph">Our expert marketplace team is a group of seasoned industry experts who know the ins and outs of all the latest industry norms. </p>
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


@include('user.include.contact')
@include('user.include.footer')
@stop