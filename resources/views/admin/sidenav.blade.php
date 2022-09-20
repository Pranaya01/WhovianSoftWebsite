<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
      <img src="{{ asset('images/mlc.png') }}" alt="MLC Logo" class="brand-image img-circle elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-light">MLC</span>
    </a>    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{ asset('dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->name }}</a>
          <!-- <a href="{{ route('users.index') }}" class="d-block">{{ Auth::user()->email }}</a> -->

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Users
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('resources.index') }}" class="nav-link">
              <i class="nav-icon far fa-file-pdf"></i>
              <p>
                Resources
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('image-slider.index') }}" class="nav-link">
              <i class="nav-icon fa fa-image"></i>
              <p>
             Image Slider
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('news.index') }}" class="nav-link">
            <i class="nav-icon far fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/logout')}}" class="nav-link">
            <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Logout
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>