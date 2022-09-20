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
            <h1>Edit Resource Tables</h1>
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
                <h3 class="card-title">Edit Resource Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                  <form method="POST" action="{{ route('resources.update', $resources_details->id) }}" enctype="multipart/form-data"> 
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
                        <label for="title" class="col-sm-4" style="color:black; text:bold">Resource Title:</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control form-control-sm" id="title"  value="{{ $resources_details->title }}">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="file" class="col-sm-3" style="color:black; text:bold">Choose File:</label>
                        <div class="form-group col-md-6">
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <a href="{{ URL::to('/') }}/files/{{ $resources_details->image }}">
                            <i class="far fa-file-pdf"></i> 

                            <!--The div to open-->
                            </a>
                            <input type="hidden" name="hidden_image" value="{{ $resources_details->image }}" />
                        </div>
                    </div>                      
                        
                    <a href="{{ route('resources.index') }}" class="btn btn-warning">Back</a>
                    <button type="submit" class="btn btn-info input-lg">Update Resources</button>
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
