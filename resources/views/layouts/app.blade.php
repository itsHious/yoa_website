{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">


<!-- empty-state.html  21 Nov 2019 03:54:38 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>YOA Global Education Partners||Admin</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.min.css')}}">
    <!-- Template CSS -->

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/bundles/fontawesome/css/all.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/assets/images/logo/logo.jpg')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/cdn.css') }}" />
      <script src="{{ asset('admin/assets/css/unpk.js') }}"></script>
    @yield('page-css')
      {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>

                    
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link text-dark dropdown-toggle nav-link-lg nav-link-user">
            {{ auth()->user()->name }} <span class="d-sm-none d-lg-inline-block"></span></a>
        <div class="dropdown-menu dropdown-menu-right pullDown">
            <a href="{!! route('profile.edit') !!}" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
            </a>


            <div class="dropdown-divider"></div>
            <form class="" id="logoutForm" action="{!! route('logout') !!}" method="post">
              @csrf

              <button type="submit" class="btn btn-link dropdown-item has-icon text-danger" name="button"><i class="mt-2 fas fa-sign-out-alt"></i>Logout</button>
            </form>

        </div>
    </li>
    </ul>
    </nav>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand text-center d-flex justify-content-center mb-5">
                <a href="{!! route('dashboard') !!}" class="text-center"> <img alt="image" style="width:90px;height:90px" src="{{ asset('website/assets/images/logo/logo_b.png') }}"  class="text-center header-logo img-fluid" /> <span class="logo-name"></span>
                </a>

            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Main</li>
                {{-- WRCC routes --}}
                @if (auth()->user()->role==1)
                  <li class="dropdown {{  request()->routeIs('dashboard') ? 'active' : ''}}">
                      <a href="{!! route('dashboard') !!}" class="nav-link  "><i data-feather="monitor"></i><span>Dashboard</span></a>
                  </li>             

                  <li class="menu-header">Website Management</li>
                  <li class="dropdown {{  request()->routeIs('team.index') ? 'active' : ''}}">
                    <a href="{!! route('team.index') !!}" class="nav-link  "><i data-feather="users"></i><span>Team Management</span></a>
                </li>
              
                <li class="dropdown {{  request()->routeIs('gallery.category.index') ? 'active' : ''}}">
                    <a href="{!! route('gallery.category.index') !!}" class="nav-link  "><i data-feather="briefcase"></i><span>Gallery</span></a>
                </li>

                <li class="dropdown {{  request()->routeIs('news.index') ? 'active' : ''}}">
                    <a href="{!! route('news.index') !!}" class="nav-link  "><i data-feather="file-text"></i><span>News</span></a>
                </li>
              
               

                  <li class="menu-header">Setups</li>
                  <li class="dropdown {{  request()->routeIs('users.index') ? 'active' : ''}}">
                      <a href="{!! route('users.index') !!}" class="nav-link  "><i data-feather="users"></i><span>User Management</span></a>
                  </li>
              


                @endif





            </ul>
        </aside>
    </div>
    <!-- Main Content -->
<div class="main-content">
    @yield('content')
  </div>
    <footer class="main-footer">
        <div class="text-center">
            <a href="https://eitsectechnologies.com">Eitsec Technologies </a></a>
        </div>
        <div class="footer-right">
        </div>
    </footer>
    </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{asset('admin/assets/js/scripts.js')}}"></script>
    <!-- Custom JS File -->
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
    @yield('page-js')
</body>


<!-- empty-state.html  21 Nov 2019 03:54:38 GMT -->

</html>

