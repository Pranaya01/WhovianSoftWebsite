@extends('layouts.includes.index')
@section('master')

 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidenav')
  <div class="content-wrapper">
    <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container">
        @if($message = Session::get('Success'))
        <div class="alert alert-success">
            <p align="center">{{$message}}</p>
        </div>
        @endif

        @if($message = Session::get('error'))
        <div class="alert alert-danger">
            <p align="center">{{$message}}</p>
        </div>
        @endif
    </div>
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1>Edit Image Slider Tables</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Image Slider Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <h2 class="alert alert-success " > EDIT Image Details<span class="fa fa-user" style="float:right">{{$imageslider_details->title}}</span></h2>
              <form method="POST" action="{{ route('image-slider.update', $imageslider_details->id) }}" enctype="multipart/form-data"> 
              @csrf
              @method('PUT')
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @endif
                    <div class="form-group">
                        <label for="title" class="col-sm-4" style="color:black; text:bold">News Title:</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control form-control-sm" id="title"  value="{{ $imageslider_details->title }}">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="file" class="col-sm-3" style="color:black; text:bold">Choose File:</label>
                        <div class="form-group col-md-6">
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <img src="{{ URL::to('/') }}/images/image-slider/{{ $imageslider_details->image }}" class="rectangle" width="500" height="300" />
                            <input type="hidden" name="hidden_image" value="{{ $imageslider_details->image }}" />
                        </div>
                    </div>        
                    <a href="{{ route('image-slider.index') }}" class="btn btn-warning">Back</a>
                    <button type="submit" class="btn btn-info input-lg">Update Image</button>
                    <br>
                    <br>
            </form>
        </form>
        <br>
            </div>
            <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
                  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop
