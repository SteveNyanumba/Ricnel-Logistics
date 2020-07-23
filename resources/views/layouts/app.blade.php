<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @auth
        <aside class="main-sidebar sidebar-dark-primary elevation-4 ricnel-sidebar">
            <!-- Brand Logo -->
            <router-link to="/" class="brand-link">
              {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                   style="opacity: .8"> --}}
              <span class="brand-text font-weight-light">Ricnel Logistics</span>
            </router-link>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                </div>
                <div class="info">
                  <router-link to="/profile" class="d-block">{{ Auth::user()->name }}</router-link>
                </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2 ricnel-nav">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item">
                    <router-link to="/home" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/categories" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Categories
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/stocks" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Stocks
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/orders" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Orders
                        <span class="right badge badge-danger">Coming Soon</span>
                      </p>
                    </router-link>
                  </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>



        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
