@extends('layouts.user.index')
@section('PageTitle', 'Resources')
@section('user')
@include('user.include.resourceHeader')

<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Resources</h2>
      <ol>
        <li><a href="{!! url(''); !!}">Home</a></li>
        <li>Resources</li>
      </ol>
    </div>
</section>

<section id="hero">
    <div class="container" style="height:10%">
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
    </div>
  </section><!-- End Hero -->


  <section id="news" class="news">
      <div class="container">
      <table id="usertable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>File</th>
                    </tr>
                  </thead>
                  @forelse( $resources_details as $resource )
                  <tbody>
                  <td>{{ $resource->title }}</td>
                  <td>
                  <a href="{{ URL::to('/') }}/files/{{ $resource->image }}" target="_blank">
                        <i class="far fa-file-pdf" aria-hidden="true"></i> 
                  </a>
                  </td>
                  @empty
                  <h5>Sorry, No Data Found!!</h5>
                  @endforelse
                {!! $resources_details->links() !!}
              </tbody>  
                </table>

          
    </section><!-- End news Section -->

  </div>
  
</section><!-- End Breadcrumbs Section -->
 



</main><!-- End #main -->

<div id="preloader"></div>
@include('user.include.footer')
@stop