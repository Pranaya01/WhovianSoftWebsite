@extends('layouts.user.index')
@section('PageTitle', $news_details->meta_title)
@section('Meta Description', $news_details->meta_description)

@section('user')
@include('user.include.header')

<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container my-5">
  <div class="text-center mb-5">
  <h2 class="font-weight-bold themeblue header-2">News</span></h2>
        <h4 class="header-4 blacktext">Latest News from Whoviansoft</h4>
  </div>

</section><!-- End Breadcrumbs Section -->
<!-- ======= news Section ======= -->
<section id="news" class="news">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

            <div class="entry-img">
                <img src="{{url('images/news', $news_details->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">{{ $news_details->news_title }}</h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center list-font"><i class="icofont-user"></i> By: {{ $news_details->user_name->name }}</a></li>
                  <li class="d-flex align-items-center list-font"><i class="icofont-wall-clock"></i>{{ $news_details->date }}</li>
                  <li class="d-flex align-items-center list-font "><i class="icofont-newspaper"></i>{{ $news_details->news_category }}</li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="paragraph">{{ $news_details->news_description }}</p>
                <!-- <blockquote>
                  <i class="icofont-quote-left quote-left"></i>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                  <i class="las la-quote-right quote-right"></i>
                  <i class="icofont-quote-right quote-right"></i>
                </blockquote> -->
              </div>
              <!-- <div class="entry-footer clearfix">
                  <h6 style="text-align:right">Share on:</h6>
                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div> -->
              <div class="default-buttons mt-5">
                <div class="float-left">
                    <a href="{!! url('article'); !!}">Back</a>
                </div>
            </div>   


            </article><!-- End news entry -->

          </div><!-- End news entries list -->

     

        </div>

      </div>
    </section><!-- End news Section -->

</main><!-- End #main -->
</br>
</br>
</br>
</br>
<div id="preloader"></div>

@include('user.include.footer')
@stop