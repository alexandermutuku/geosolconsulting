<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <nav class="navbar has-shadow" >
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item is-paddingless" href="{{route('home')}}">
          <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer logo">
        </a>
          @if (Request::segment(1) == ('manage'))
            <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
              <span class="icon"><i class="fa fa-arrow-circle-o-right"></i></span>
            </a>
          @endif

        <button class="button navbar-burger">
         <span></span>
         <span></span>
         <span></span>
       </button>
      </div>
      <div class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item is-tab is-active">Learn</a>
          <a class="navbar-item is-tab">Discuss</a>
          <a class="navbar-item is-tab">Share</a>
        </div> <!-- end of .navbar-start -->


        <div class="navbar-end nav-menu" style="overflow: visible">
          @guest
            <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
            <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
          @else
            <div class="navbar-item has-dropdown is-hoverable m-l-10">
              <a class="navbar-link">Hey {{Auth::user()->name}}</a>
              <div class="navbar-dropdown is-right" >
                <a href="#" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                  </span>Profile
                </a>

                <a href="#" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-bell m-r-5"></i>
                  </span>Notifications
                </a>
                <a href="{{route('manage.dashboard')}}" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-cog m-r-5"></i>
                  </span>Manage
                </a>
                <hr class="navbar-divider">
                <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <span class="icon">
                    <i class="fa fa-fw fa-sign-out m-r-5"></i>
                  </span>
                  Logout
                </a>
                @include('_includes.forms.logout')
              </div>
            </div>
          @endguest
        </div>
      </div>

    </div>
  </nav>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
