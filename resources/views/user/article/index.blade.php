@extends('layouts.user.index')
@section('PageTitle', 'News')
@section('user')
@include('user.include.header')

<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>News</h2>
      <ol>
        <li><a href="{!! url(''); !!}">Home</a></li>
        <li>News</li>
      </ol>
    </div>

  </div>
  
</section><!-- End Breadcrumbs Section -->
 
<!-- ======= Our NewsSection ======= --> 
  <section id="news" class="news">
      <div class="container">

        <div class="row">
          
          @forelse( $news_details as $news )
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
                <!-- <p>{{ $news->news_description }}</p> -->
                <div class="read-more">
                <a href="{{ route('article.show', $news->id) }}">Read More</a>
                </div>
              </div>

            </article><!-- End news entry -->
          </div>
          @empty
          <h5>Sorry, No Data Found!!</h5>
          @endforelse
        </div>
        {!! $news_details->links() !!}
    </section><!-- End news Section -->


</main><!-- End #main -->

<div id="preloader"></div>
@include('user.include.footer')
@stop