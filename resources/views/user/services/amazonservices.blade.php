@extends('layouts.user.index')
@section('PageTitle', 'Amazon Services')
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
    <div class="container-fluid background-white toppadding-50 bottompadding-50">
        <div class="container">
            <div class="row toppadding-10">

                <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                <div class="float-left">
                    <h2 class="font-weight-bold themered">Amazon Services</Span></h2>
                    <h4>Selling Your Amazon Products Made Effortless!</h4>
                    <p class="list toppadding-30">We handle all the heavy lifting of creating and managing your Amazon store for you. 
                        Whoviansoft excels in delivering industry-best Amazon services. Our team of experts specialize in providing top-notch Amazon services, covering everything from marketing, advertising to logistics and creative account management. We are your dedicated partner in growth– supporting your needs all the way.</p>
                </div>

                    
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                <div class="float-right">
                    <h2 class="font-weight-bold themered">Amazing Amazon Facts</Span></h2>
                    <h4>Focus on what you do best– Selling your amazing products!</h4>
                    <ul class="fa-ul">
                    <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Amazon is the most visited retail site in US with 300 million active users.</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Amazon’s net revenue was $386.06 billion in 2020.</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Amazon is the second company after Apple to reach $1 trillion mark.</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>82% of buyers on Amazon give importance to Pricing when shopping on the platform.</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>4000 items are sold on Amazon in a minute in US alone.</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>More than 2.5 Million Sellers are actively selling their products.</li>
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
</section>
    

<section id="amazon_services">
    <div class="container-fluid toppadding-60 bottompadding-20 background-white">
        <div class="row bottompadding-50 pl-3 pr-3">
            <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                <ul class="list-group toppadding-20">
                        <li class="amazon-list font-weight-bold" style="list-style-type: none"><a id="amz_brandregistry" class=" list-group-item activated" href="javascript:void(0);">Brand Registry</a></li>
                        <li class="amazon-list font-weight-bold" style="list-style-type: none"><a id="amz_storesetup" class="list-group-item" href="javascript:void(0);">Amazon Store Setup</a></li>
                        <li class="amazon-list font-weight-bold" style="list-style-type: none"><a id="amz_accntmgmt" class=" list-group-item" href="javascript:void(0);">Amazon Account Management</a></li>
                        <li class="amazon-list font-weight-bold" style="list-style-type: none"><a id="amz_productlisting" class=" list-group-item" href="javascript:void(0);">Amazon A+ & Essential Content</a></li>
                        <li class="amazon-list font-weight-bold" style="list-style-type: none"><a id="amz_contentoptimization" class=" list-group-item" href="javascript:void(0);">Amazon Search Advertising</a></li>
                        <li class="amazon-list font-weight-bold" style="list-style-type: none"><a id="amz_ebc" class=" list-group-item" href="javascript:void(0);">Account Suspension Reinstatement</a></li>
               </ul>

            </div>
            <div class="col-xl-9 col-lg-9 col-md-6 col-12">
                <div class="amz_storesetup setup hide">
                    <h2 class="themegreen header-2">Amazon Store Setup</h2>
                        <p class="mt-3">We are here to support your Amazon journey right from the start. From creating your Amazon Store to growing your Amazon business, we have your backWe are here to support your Amazon journey right from the start! Your Amazon store has the potential to reach a wider audience and showcase your brand.</p>
                        <p class="mt-3">With a unique and customized storefront design, our experts help showcase your brand in the best way possible, ultimately increasing your chances of making a sale. </p>

                        <div class="mt-3 themered"><h4>We Make Your Amazon Journey A Breeze!</h4 >

                </div>
</div>

                <div class="amz_brandregistry setup">
                    <h2 class="themegreen header-2">Brand Registry</h2>
                    <p class="mt-3 paragraph">Amazon brand registry process can be tricky especially if you are not familiar with Amazon’s requirements and documentation. Don’t let the thought of time-consuming process hold you back.</p>
                    <p class="paragraph">We can help you navigate the brand registry process quickly and efficiently, so you can reap the benefits of a registered brand on Amazon.</p>
                    <div class="font-weight-bold mt-3 themered"><h4>Benefits of Brand Registry</h4></div>
                    <ul class="fa-ul mt-3">
                        <li class="mt-3 list"><span class="fa-li "><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Complete control and authority over your brand’s product listings and advertising data.</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Access to proactive report and search tools.</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Exemption from UPC purchase</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Access to Amazon Brand Building tools like A+ content, Amazon Brand Store, Sponsored products and Brand dashboard.</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Allows you to  search and report potential infringement and violation to keep your brand value intact.</li>

                    </ul>
                </div>


                <div class="amz_productlisting hide">
                    <h2 class="themegreen">Amazon A+ & Essential Content</h2>
                    <p class="mt-3">A+ Content is a powerful Amazon feature that allows seller to modify and enhance the product content, which is essential for building brand value and gaining customer trust.</p>
                    <p class="mt-3">From SEO optimization to eye-catching imagery and A+ content creation, we know how to captivate customers and elevate your brand image. </p>
                    <div class="mt-3 themered font-weight-bold"><h4>Benefit of Amazon A+ & Essential Content</h4></div>
                    <ul class="fa-ul mt-3">
                        <li class="list"><span class="fa-li paragraph-left"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Helps increase sales</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Boosts brand value</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Increases credibility among customers</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Increases the Click-through Rate (CTR) of a listing</li>

                    </ul>         
                    <div class="mt-3 themered font-weight-bold"><h4>Here’s what we do</h4></div>

                    <ul class="fa-ul mt-3">
                        <li class="list"><span class="fa-li paragraph-left"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Craft compelling SEO optimized copy</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Craft amazon listing copies (Title, Bullet points, Product descriptions, Search terms)</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Design images for the A+ Content</li>
                    </ul>
                </div>


                <div class="amz_contentoptimization hide">
                    <h2 class="themegreen header-2">Amazon Search Advertising</h2>
                    <p class="mt-3 paragraph-left">Our expert team utilizes data-driven strategies to get your products in front of the right audience, maximizing your ROI and driving sales. </p>
                    <p class="mt-3 paragraph-left">We'll work with you to plan and execute efficient Amazon PPC ad campaigns that fits your budget and takes your business to new heights.</p>
                    <div class="mt-3 paragraph-left"><h4 class="themered font-weight-bold">Here’s what we do</h4></div>
                    <ul class="fa-ul mt-3">
                        <li class="list"><span class="fa-li list-font"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Ads management</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Listing Optimization</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Amazon Posts Management</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Keyword Optimization & Index monitoring</li>
                    </ul>
                </div>


                <div class="amz_ebc hide">

                    <h2 class="themegreen header-2">Account Suspension Reinstatement</h2>
                    <p class="mt-3 paragraph-left">Getting Amazon account suspended is every seller’s worst nightmare. Amazon is all about providing the best possible experience for buyers, and that means following their strict guidelines to the letter. If you fall below Amazon Account Health standard, your account could be suspended almost immediately.</p>
                    <p class="paragraph-left">If your account did get suspended, leaving you unable to sell, we can get your account reinstated. We'll dive deep into the details of your suspension, identify the root cause, and work tirelessly to create a professional and effective Account Reinstatement Appeal Letter on your behalf.</p>
                    <p class="paragraph-left">Our team knows exactly what Amazon is looking for in these situations. We'll make sure your appeal hits all the right notes. We'll handle all communication with Amazon, keeping you in the loop every step of the way. Our proven track record of success means you can trust us to get your account reactivated and get your business back on track. </p>


                </div>




                <div class=" amz_accsuspension hide">
                    <h2 class="themegreen">Account Reinstatement from Suspension</h2>
                    <p class="mt-5">Amazon Account Suspension is one of the most dreaded nightmare for sellers on Amazon. Amazon follows
                        and wants every seller to follow best practices to enhance buyers experience. It strictly disallows
                        any action that does not fall under the guideline. Therefore, its imperative to keep your Amazon
                        Account Health up to the mark. If your management score is below Amazons target, the account gets suspended and you are no more allowed to sell.</p>
                    <p class="themered">Proper plan of action and careful crafting of Suspension Appeal Letter is required.</p>
                    <p>Our Virtual Assistant will get all necessary details and investigate the reason of suspension.
                        We write professional Account Re-instatement Appeal Letters on behalf of you with proper plan of
                        action will guarantee to get you out of suspension. We will undertake all necessary communication
                        with Amazon and ensure your account is re-activated.</p>
                </div>



                <div class="amz_accnt_mgmt hide">
                    <h2 class="themegreen header-2">Amazon Account Management</h2>
                    <p class="mt-3">Seller Central Dashboard contains lots of daily tasks that needs to be monitored, managed and updated on a regular basis.</p>
                    <p class="mt-3">Our team of expert account managers will monitor your seller central account and ensure all tasks are completed efficiently and accurately according to your business needs.</p>
                    <div class="mt-3 themered font-weight-bold themered"><h4>Here’s what we do</h4></div>
                    <ul class="fa-ul">
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Inventory Updates</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Competitor Price Monitoring</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Price Updates</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>BuyBox Monitoring and Management</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Listing Enhancement for quality</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>New product addition/uploads</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Image Editing</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Store Front Management</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>A+ Content Management</li>
                        <li class="mt-3 list"><span class="fa-li"><i class="fa fa-arrow-circle-right themered mr-3"></i></span>Account Health Monitoring and Control</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="amz_brandregistry setup">

<ul class="process">
  <li class="process__item">
    <span class="process__number">1</span>
    <span class="process__title">Conversation</span>
    <span class="process__subtitle">We’ll call you to gather set-up info & documents</span>
  </li>

  <li class="process__item">
    <span class="process__number">2</span>
    <span class="process__title">Brand registry process</span>
    <span class="process__subtitle">We start brand registry & file logs on seller support</span>
  </li>

  <li class="process__item">
    <span class="process__number">3</span>
    <span class="process__title">UPC exemption</span>
    <span class="process__subtitle">We skip UPCs & get your brand registered on Amazon </span>
  </li>

  <li class="process__item">
    <span class="process__number">4</span>
    <span class="process__title">Brand infringement protection</span>
    <span class="process__subtitle">We protect your brand from infringement </span>
  </li>
</ul>
                      

</section>


<section class="amz_storesetup setup hide">

<ul class="process">
  <li class="process__item">
    <span class="process__number">1</span>
    <span class="process__title">Set up call</span>
    <span class="process__subtitle">We’ll call to gather info for your Amazon store</span>
  </li>

  <li class="process__item">
    <span class="process__number">2</span>
    <span class="process__title"> Store setup</span>
    <span class="process__subtitle">On receipt of details, we'll set up your Amazon Shop</span>
  </li>

  <li class="process__item">
    <span class="process__number">3</span>
    <span class="process__title">Get product info</span>
    <span class="process__subtitle">We’ll gather info and pics for product listing</span>
  </li>

  <li class="process__item">
    <span class="process__number">4</span>
    <span class="process__title">Upload product </span>
    <span class="process__subtitle">Product upload to your store before it gets live.</span>
  </li>
</ul>
                      

</section>

<!-- ======= Why Choose us Section ======= -->
<section id="choose-us" class="choose-us toppadding-80">
      <div class="container" data-aos="fade-up">
            <div class="container headings text-center">
                <h2 class="font-weight-bold themeblue header-2">Why Choose Whoviansoft For Amazon Service?</h2>
                </div>

        <div class="row toppadding-10 bottompadding-50">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-info"></i></div>
              <h4 class="header-4 themered">One-Stop- Solution </h4>
              <p class="box-paragraph">We're your one-stop shop for all things marketplace management. Be it web development, data entry, transcription, marketing, or conversion – you name it, we've got it covered.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-money"></i></div>
              <h4 class="header-4 themered">Easy Affordable Services</h4>
              <p class="box-paragraph">Our services are easy and affordable, without compromising on quality. You'll get top-notch work done at a reasonable cost, without any hassle.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-users"></i></div>
              <h4 class="header-4 themered">Customer Centric Approach</h4>
              <p class="box-paragraph">We're all about putting you first. We're dedicated to meeting your specific requirements and providing excellent service</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-database"></i></div>
              <h4 class="header-4 themered">Data Driven Solutions</h4>
              <p class="box-paragraph">When it comes to solutions, we're all about the data. Get the most out of your marketplace, with strategies tailored to your unique needs.</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->


<div id="preloader"></div>
@include('user.include.contact')
@include('user.include.footer')
@stop

