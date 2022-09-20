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
    <!-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif -->
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
            <h1>Create News Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
              <li class="breadcrumb-item active">News Tables</li>
            </ol>
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
                <h3 class="card-title">News Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('news.store') }}" enctype="multipart/form-data">
                <form>
                @csrf
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
                    <label for="date" class="col-sm-3" style="color:black; text:bold">News Date:</label>
                    <div class="col-sm-8">
                        <input type="date" name="date" class="form-control form-control-sm" id="date" placeholder="Enter News Date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="news_title" class="col-sm-3" style="color:black; text:bold">News Title:</label>
                    <div class="col-sm-8">
                        <input type="text" name="news_title" class="form-control form-control-sm" id="news_title" placeholder="Enter News Title">
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="news_type" class="col-sm-3" style="color:black; text:bold">News Type:</label>
                    <div class="col-sm-4">
                        <select name="news_type" id="news_type" class="form-control form-control-sm" >
                            <option value="3">Competition</option>
                            <option value="4">ANFA</option>
                            <option value="5">Development</option>
                            <option value="6">Mens Football</option>
                            <option value="7">Womens Football</option>
                        </select>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="news_description" class="col-sm-3" style="color:black; text:bold">Description:</label>
                    <div class="col-sm-8">
                        <textarea cols="5" rows="5" class="form-control" name="news_description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-3" style="color:black; text:bold">Choose File:</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control form-control-sm" id="image">
                    </div>
                </div>
                <br>
                <a href="{{ route('news.index') }}" class="btn btn-warning">Cancel</a>
                <button type="submit"class="btn btn-primary">Add News</button>

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
