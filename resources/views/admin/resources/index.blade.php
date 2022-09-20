@extends('layouts.includes.index')
@section('master')
  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        </ul>
    </nav>
  @include('admin.sidenav')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Resource Section</h3>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active">News Tables</li>
                </ol>
            </div> -->
            </div>
        </div>
        <!-- /.container-fluid -->
        </section>
        <div class="container">
        <!-- <h2 class="text-center" style="color:black; text:bold">News Details</h2> -->
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
        <div class="row">
          <div class="col-12">
          <div align="right">
            <a href="{{ route('resources.create') }} " class="btn btn-sm btn-success"><span class="fa fa-edit"></span>Add Image</a>
             </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Resources Table</h3>

                <div class="card-tools">
            
                </div>
              </div>
              <div class="card-body">
              <table id="usertable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>File</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach($resources_details as $resource)
                <tbody>
                    <td>{{ $resource->id }}
                    <td>{{ $resource->title}}</td>
                    <!-- <td><embed src="{{ URL::to('/') }}/files/{{ $resource->image }}" style="width:600px; height:800px;" frameborder="0"> -->
                    <td>
                        <a href="{{ URL::to('/') }}/files/{{ $resource->image }}">
                        <i class="far fa-file-pdf" aria-hidden="true"></i> 

                        <!--The div to open-->
                        </a>
                    </td>
                    <td width="25%">
                        <form action="{{ route('resources.destroy', $resource->id) }}" method="post">
                            <a href="{{ route('resources.edit', $resource->id) }}" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</button>
                        </form>
                    </td>
                </tbody>    
                @endforeach
                 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
          </div>
        </div>
    </div>
  

@stop