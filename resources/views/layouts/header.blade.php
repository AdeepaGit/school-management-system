 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 New lecturs
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
     
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="text-align: center;">
      <span class="brand-text font-weight-light" style="font-weight: bold !important; font-size:20px;">ABC College</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           @if(Auth::user()->user_type ==1)
          <img src="{{ asset('uploads/' . Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image">
          @elseif(Auth::user()->user_type == 2)
          <img src="{{ asset('uploads/' . Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Auth::user()->user_type ==1)
           <li class="nav-item">
            <a href="{{ url('admin/dashboard') }}" class="nav-link @if(Request :: segment(2) == 'dashboard') active @endif ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/admin/list') }}" class="nav-link 
            @if(Request::segment(3) == 'list' || Request::segment(3) == 'addAdmin' || Request::segment(3) == 'edit') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Admin 
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ url('admin/admin/students') }}" class="nav-link 
            @if(Request :: segment(3) == 'students' || Request::segment(3) == 'addStudent' || Request::segment(3) == 'editStudent' ) active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Students 
              </p>
            </a>
          </li>
          

          @elseif(Auth::user()->user_type == 2)

          <li class="nav-item">
            <a href="{{ url('student/dashboard') }}" class="nav-link @if(Request :: segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @endif

           <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                LogOut
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>