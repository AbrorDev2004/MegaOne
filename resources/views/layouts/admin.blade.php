<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Dashboard</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
      @yield('css')
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
         </div>
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="index3.html" class="nav-link">Home</a> 
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Contact</a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                 <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                   <i class="fas fa-expand-arrows-alt"></i>
                 </a>
               </li>
             </ul>
            <!-- Right navbar links -->
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                  </div>
               </div>
               <!-- SidebarSearch Form -->
               <div class="form-inline">
                  <div class="input-group" data-widget="sidebar-search">
                     <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                     <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->


                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('admin/product*') ? 'active' : ''  }}">
                                <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Mahsulotlar
                                        <i class="fas fa-angle-left right"></i>
                                        <span class="badge badge-danger right"></span>
                                    </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.product.create') }}" class="nav-link">
                                        <i class="fas fa-plus-circle"></i>
                                        <p>Yangi qo'shish</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('admin.product.index') }}" class="nav-link">
                                        <i class="fas fa-eye"></i>
                                        <p>Barchasini ko'rish </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('admin/rasta*') ? 'active' : ''  }}">
                                <i class="fas fa-bars"></i>
                               <p>
                                  Rastalar
                                  <i class="fas fa-angle-left right"></i>
                                  <span class="badge badge-danger right"></span>
                               </p>
                            </a>
                            <ul class="nav nav-treeview">
                               <li class="nav-item">
                                  <a href="{{ route('admin.rasta.create') }}" class="nav-link">
                                     <i class="fas fa-plus-circle"></i>
                                     <p>Yangi qo'shish</p>
                                  </a>
                               </li>
                               <li class="nav-item ">
                                  <a href="{{ route('admin.rasta.index') }}" class="nav-link">
                                    <i class="fas fa-eye"></i>
                                     <p>Barchasini ko'rish </p>
                                  </a>
                               </li>
                            </ul>
                         </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link {{ request()->is('admin/slider*') ? 'active' : ''  }}">
                            <i class="fas fa-sliders-h"></i>
                           <p>
                              Slayder
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-danger right"></span>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="{{ route('admin.slider.create') }}" class="nav-link">
                                 <i class="fas fa-plus-circle"></i>
                                 <p>Yangi qo'shish</p>
                              </a>
                           </li>
                           <li class="nav-item ">
                              <a href="{{ route('admin.slider.index') }}" class="nav-link">
                                <i class="fas fa-eye"></i>
                                 <p>Barchasini ko'rish </p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link {{ request()->is('admin/about*') ? 'active' : ''  }}">
                            <i class="fas fa-info-circle"></i>
                           <p>
                              Biz haqimizda
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-danger right"></span>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="{{ route('admin.about.create') }}" class="nav-link">
                                 <i class="fas fa-plus-circle"></i>
                                 <p>Yangi qo'shish</p>
                              </a>
                           </li>
                           <li class="nav-item ">
                              <a href="{{ route('admin.about.index') }}" class="nav-link">
                                <i class="fas fa-eye"></i>
                                 <p>Barchasini ko'rish </p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link {{ request()->is('admin/opendata*') ? 'active' : ''  }}">
                            <i class="fas fa-server"></i>
                           <p>
                              Ochiq ma'lumotlar
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-danger right"></span>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="{{ route('admin.opendata.create') }}" class="nav-link">
                                 <i class="fas fa-plus-circle"></i>
                                 <p>Yangi qo'shish</p>
                              </a>
                           </li>
                           <li class="nav-item ">
                              <a href="{{ route('admin.opendata.index') }}" class="nav-link">
                                <i class="fas fa-eye"></i>
                                 <p>Barchasini ko'rish </p>
                              </a>
                           </li>
                        </ul>
                     </li>

                     <li class="nav-item">
                        <a href="#" class="nav-link {{ request()->is('admin/announ*') ? 'active' : ''  }}">
                            <i class="fas fa-bullhorn"></i>
                           <p>
                              E'lonlar
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right"></span>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="{{ route('admin.announ.create') }}" class="nav-link">
                                 <i class="fas fa-plus-circle"></i>
                                 <p>Yangi qo'shish</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="{{ route('admin.announ.index') }}" class="nav-link">
                                <i class="fas fa-eye"></i>
                                 <p>Barchasini ko'rish </p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item ">
                        <a href="{{ route('admin.contact.index') }}" class="nav-link {{ request()->is('admin/contact*') ? 'active' : ''  }}">
                            <i class="fas fa-id-card"></i>
                           <p>
                              A'loqa

                           </p>
                        </a>

                     </li>

                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>

           @if (request()->path()=='admin/dashboard')
            <section class="content">
               <div class="container-fluid">
                  @yield('content')
               </div>
            </section>
            @else
               <div class="content-wrapper" style="min-height: 1518.4px;">
                     @yield('content')
               </div>
           @endif




         <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
               <b>Version</b> 3.1.0
            </div>
         </footer>
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="/admin/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="/admin/dist/js/adminlte.js"></script>
      @yield('scripts')
   </body>
</html>
