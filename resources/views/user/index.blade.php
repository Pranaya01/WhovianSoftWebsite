@extends('layouts.user.index')
@section('PageTitle', 'Home')
@section('user')
@include('user.include.header')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      </ol>

        <div class="carousel-inner" role="listbox">
        @forelse( $imageslider_details->take(3) as $images )
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{url('images/image-slider', $images->image)}}" alt="{{ $images->title }}" style="object-position: top; height: auto; width: 100%;">
                    <div class="carousel-caption ">
                    <!-- d-none d-md-block -->
                      <h2 class="animate__animated animate__fadeInDown">{{ $images->title }}</h2>
                    </div>
            </div>
            @empty
            <h5 style="margin-left:10px">Sorry, No Image Found</h5>
          @endforelse
          </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

<main id="main">
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row no-gutters">
      <div class="col-lg-6 video-box">
        <img src="{{ asset('images/mylc.png') }}" class="img-fluid" alt="MLC Logo" style="margin-top:20%; margin-left:5%; weight:20%">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
        <div class="section-title">
          <h2>About MLC</h2>
        </div>
        <hr>
        <p>My Leadership Compass (MLC) is an initiative to enable an equitable and inclusive workspace where individuals can belong, thrive, co-learn, and co-create. Through MLC, we will work to assess, enable and improve the Diversity, Equity and Inclusion(DEI) mechanism in the professional work setting to promote sustainable performance productivity by equipping the teams and their leaders with knowledge and resources. We exist to help you build DEI lenses and be well equipped with DEI tools. </p>                             
          <div class="section-title">
          <a href="{!! url('about-us'); !!}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read more</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->

<div class="container">
<div class="section-title">
    <h2>Testimonial</h2>
</div>
<section class="testimonial text-center">
        <div class="container">
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('images/testimonial/sushma.png') }}" class="img-circle img-responsive" />
                            <p>"I will use diverse and inclusive examples in my classroom. So, that there are no implicit biases among my students."</p>
                            <h4>Sushma Silwal, Teacher, Aksharaa School</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('images/testimonial/udgum.png') }}" class="img-circle img-responsive" />
                            <p>“ I noticed some of the implicit biases that I have been practicing in my class. Now I will be mindful before the session and class begins the semester.”</p>
                            <h4>Udgum Khadka, Head of International Collaboration and Innovations, King’s College</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('images/testimonial/medha.png') }}" class="img-circle img-responsive" />
                            <p>“ I had a reflection on real life/past incidences through the DEI lense and its implications. I will start practicing using inclusive terms while communicating.”</p>
                            <h4>Medha Shrestha, HR Associate, King’s College</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('images/testimonial/nimmi.png') }}" class="img-circle img-responsive" />
                            <p>“ I learned to be mindful of the examples I’m using within my classroom, and I will use gender neutral language and be more mindful about my words.” </p>
                            <h4>Nimmi Basnet, English Content Lead, Teach For Nepal</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('images/testimonial/mausam.png') }}" class="img-circle img-responsive" />
                            <p>“I will use the DEI lens to amend the Human Resources Development policies and academic plans.” </p>
                            <h4>Mansun KC, Director at Uniglobe Secondary School and College</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('images/testimonial/nimmi.png') }}" class="img-circle img-responsive" />
                            <p>“I will use diverse and inclusive examples in the classroom even if the national curriculum does not follow it.” </p>
                            <h4>Nimmi Basnet, English Content Lead</h4>
                        </div>
                    </div>
                
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>
</div>


<section id="news" class="news">
      <div class="container">
      <div class="section-title">
          <h2>Our News</h2>
        </div>
        <div class="row">    
        @forelse( $news_details->take(3) as $news )
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
              <img src="{{url('images/news', $news->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
              <a href="{{ route('article.show', $news->id) }}">{{ $news->news_title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>{{ $news->date }}</li>
                </ul>
              </div>
              
              <div class="entry-content">
                <!-- <div class="read-more">
                <a href="{{ route('article.show', $news->id) }}">Read More</a>
                </div> -->
              </div>
            </article><!-- End news entry -->
          </div>
          @empty
          <h5>Sorry, No Data Found!!</h5>
          @endforelse
          <div class="section-title">
          <a href="{!! url('article'); !!}" class="btn-get-started animate__animated animate__fadeInUp scrollto">View All</a>
        </div>
        </div>
    </section><!-- End news Section -->

    

    

    <section id="crew" class="crew">
      <div class="container">
        <div class="section-title">
          <h2>Our Team</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
            <div class="pic"><img src="{{ asset('images/our team/Amuda.jpg') }}" class="img-fluid" alt="Team Pic"></div>
              <div class="member-info">
                <h4 style="color:white">
                <h4 style="color:white">Amuda Mishra</a></h4>
                </h4>
                <span>Key Facilitator</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
            <div class="pic"><img src="{{ asset('images/our team/Neha.png') }}" class="img-fluid" alt="Team Pic"></div>
              <div class="member-info">
                <h4 style="color:white">
                <h4 style="color:white">Neha Karki</a></h4>
                </h4>
                <span>Program Officer</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
            <div class="pic"><img src="{{ asset('images/our team/Aagya.png') }}" class="img-fluid" alt="Team Pic"></div>
              <div class="member-info">
                <h4 style="color:white">
                <h4 style="color:white">Aagya Shrestha</h4>
                </h4>
                <span>Program Officer</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
            <div class="pic"><img src="{{ asset('images/our team/Deependra Ji.jpg') }}" class="img-fluid" alt="Team Pic"></div>
              <div class="member-info">
                <h4 style="color:white">
                <h4 style="color:white">Deependra Raj Joshi</h4>
                </h4>
                <span>Admin/Finance Manager</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
            <div class="pic"><img src="{{ asset('images/our team/Olivia.png') }}" class="img-fluid" alt="Team Pic"></div>
              <div class="member-info">
                <h4 style="color:white">
                <h4 style="color:white">Olivia Leary</h4>
                </h4>
                <span>Content Creator & Social Media</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
            <div class="pic"><img src="{{ asset('images/our team/Dup dai.jpg') }}" class="img-fluid" alt="Team Pic"></div>
              <div class="member-info">
                <h4 style="color:white">
                <h4 style="color:white">Dup Tsering Lepcha</h4>
                </h4>
                <span>Communication Officer</span>
              </div>
            </div>
          </div>
          
      </div>
</section>

<section class="counts section-bg">
      <div class="container">
      <div class="section-title">
          <h2>Streams</h2>
        </div>
        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-network-tower" style="color: #20b38e;"></i>
              <p>Communication</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
            <i class="icofont-users-alt-1" style="color: #20b38e;"></i>
              <p>Human Resource</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-microphone-alt" style="color: #46d1ff;"></i>
              <p>Leadership & Management</p>
              <p></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-law-document" style="color: #ffb459;"></i>
              <p>Polices & Guideline</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Counts Section -->
    </main>
<div id="preloader"></div>
@include('user.include.footer')
@stop