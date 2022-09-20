@extends('layouts.user.index')
@section('PageTitle', 'FAQ')
@section('user')
@include('user.include.header')

<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>FAQ</h2>
      <ol>
        <li><a href="{!! url(''); !!}">Home</a></li>
        <li>FAQ</li>
      </ol>
    </div>

  </div>
  
</section><!-- End Breadcrumbs Section -->
 

<section id="content">
	<div class="container">
					
					<div class="about">
					
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>My Leadership <span class="color">Compass</span></h3>
									<p>My Leadership Compass (MLC) is an initiative to enable an equitable and inclusive workspace where individuals can belong, thrive, co-learn, and co-create. Through MLC, we will work to assess, enable and improve the Diversity, Equity and Inclusion(DEI) mechanism in the professional work setting to promote sustainable performance productivity by equipping the teams and their leaders with knowledge and resources. We exist to help you build DEI lenses and be well equipped with DEI tools. </p>
</p>
                                    	<p>"For us Diversity, Inclusion, and Equity is not just the trending vocabulary, it is a concept that we all can create a work culture where each individual can thrive!"</p>
								</div> 
							</div>
						</div>
						
						<div class="row">
        <div class="col-lg-5">
          <div class="about-carousel wow fadeInLeft animated" data-wow-animation-name="none">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="item active">
                <img class="d-block w-100" src="{{ asset('images/service3.jpg') }}" alt="First slide" style="object-position: top">
                <div class="carousel-caption">
                    <p>
                      About the image in one line.
                    </p>
                  </div>
                </div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 about wow fadeInRight animated" data-wow-animation-name="none" style="visibility: visible; -webkit-animation-name: none;">

          <p>
            After joining the Leadership Space individual will be able to: 
          </p>
          <ul class="list-unstyled">
            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Develop strong leadership acumen
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Enhance their interpersonal skills
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Develop critical thinking and analysis through the DEI lens
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Understand the self and society through an intersectional lens 
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Have a coach to work on specific needs
            </li>

            <li>
              <i class="fa fa-angle-right pr-10">
              </i>
              Aliquam tincidunt mauris eu risus.
            </li>

          </ul>
          <!-- <blockquote>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </p>
            <small>
              CEO Amuda Mishra
            </small>
          </blockquote> -->
        </div>
      </div>
						<br>
						
						<div class="row">
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Choose Us?</span></h3>
								</div>
								<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
							</div>
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>FAQ</span></h3>
								</div>		
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h6 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
											<i class="fa fa-angle-right"></i> What are the services available by My Leadership Compass(MLC) on DEI?
										  </a>
										</h6>
									 </div>
									 <div id="collapseOne-alt3" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
										  We deliver workshops and training on DEI to the organizations/institutions/companies based on different packages available to help them strengthen their DEI mechanism in the workplace.

										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h6 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
											<i class="fa fa-angle-right"></i> In which language are the sessions on DEI facilitated?
										  </a>
										</h6>
									 </div>
									 <div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  The language used to facilitate the session is both Nepali and English as requested by the client and as favorable for their workplace.
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h6 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
											<i class="fa fa-angle-right"></i> What are our focus areas in DEI while delivering the sessions?
										  </a>
										</h6>
									 </div>
									 <div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  We help to enable and improve DEI in the workplace through following four existing streams   of the company among which the company can choose any:
										  <ul>
										  	<li>Communication</li> <li>Human Resource</li> <li>Leadership & Management</li> <li>Policies & Guideline</li>
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h6 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-angle-right"></i> How can I contact you for the workshop?

										  </a>
										</h6>
									 </div>
									 <div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  You can write to us at <b>info.myleadershipcompass@gmail.com</b> to connect with us about the workshop.

										</div>
									 </div>
								  </div>
								</div>
								<!-- Accordion ends -->
								
							</div>
							
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Our Expertise</span></h3>
								</div>								
								<h6>Gender</h6>
								<div class="progress pb-sm">
								  <!-- White color (progress-bar-white) -->
								  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Leadership</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Experience</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Development</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
							</div>
							
						</div>
						
						 						
						 
						<br>
						
					  
						
					</div>
									
				</div>
	</section>


</main><!-- End #main -->

<div id="preloader"></div>
@include('user.include.footer')
@stop