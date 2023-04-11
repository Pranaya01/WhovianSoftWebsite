@extends('layouts.user.index')
@section('PageTitle', 'News')
@section('user')
@include('user.include.header')

<section class="toppadding-20 bottompadding-40">
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
  </div>
</div>

</section>
<div id="preloader"></div>
@include('user.include.contact')
@include('user.include.footer')
@stop