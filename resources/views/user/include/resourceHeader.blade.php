<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="aim float-left">
        <i class="icofont-star"></i>Diversity 
        <i class="icofont-star"></i> Equity 
        <i class="icofont-star"></i> Inclusion

      </div>
    </div>
  </section>
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <a href="../"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
          <li><a href="{!! url(''); !!}">About Us</a></li>
          <li><a href="{!! url('services'); !!}">Services</a></li>
          <li><a href="{!! url('resource'); !!}">Resources</a></li>
          <li><a href="{!! url('faq'); !!}">FAQ</a></li>
          <li><a href="{!! url('contact-us'); !!}">Contact</a></li>
          <li><a href="{{url('/logout')}}">Logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->