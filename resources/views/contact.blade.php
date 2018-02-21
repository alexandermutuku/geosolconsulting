<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting|Contact </title>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!--styles-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.css">
      <link rel="stylesheet" href=""/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head> <!-- end of the header-->
    <body>
    <section class="hero is-transparent is-fullheight">

      @include('_includes.nav.main') <!--includes the main navigation -->

      <div class="hero-body">
        <div class="container fullheight">
          <div class="container has-text-left">
              <div class="columns is-vcentered">
                <div class="column is-6 is-offset-1 has-text-left p-r-100">
                  <h1 class="title is-2">
                    Talk to us
                  </h1>
                  <div class="is-offset-3 p-l-50">
                    <h2 class="subtitle is-4 ">
                      Lorem ipsum dolor sit amet,
                    </h2>
                    <p class="lead">
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                  </div>

                  <br>
                  <p class="has-text-right has-text-weight-light"></p>
                </div>
                <div class="column is-5">
                  <div class="columns">

                  </div>
                </div>
              </div>
            {{-- <h1>Here Goes in the content of the Landing page</h1> --}}
          </div> <!--try using the hero page styles -->
        </div>
      </div> <!-- contents of landing page -->
    </section> <!--end of section-->

    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-5">
            {{-- <figure class="image is-4by3">
              <img src="http://placehold.it/800x600" alt="Description">
            </figure> --}}
          </div>
          <div class="column is-6 is-offset-1 has-text-right p-r-100">
            <h1 class="title is-2">
              Design contact form elements
            </h1>
            <h2 class="subtitle is-4 m-t-20">
              Lorem ipsum dolor sit amet,
            </h2>
            <p class="lead ">
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            <p class="has-text-right has-text-weight-light">
              <a  href="" class="is-medium is-info is-outlined">
                DISCOVER MORE
              </a>
            </p>
          </div>
        </div>
      </div>
    </div><!--end of hero-body-->


    <div class="hero-body">
      <div class="">
        <h1 class="has-text-centered">
          Social Media
        </h1>
      </div>
      <div class="columns has-text-centered has-text-small has-text-weight-light">
        <div class="column">
          <div class='icon social fb'><i class='fa fa-facebook'></i></div>
          <p class="">FACEBOOK</p>
          <p class="is-italic">@geosolconsulting</p>
        </div> <!--end of the column-->

        <div class="column">
          <div class='icon social tw'><i class='fa fa-twitter'></i></div>
          <p class="">TWITTER</p>
          <p class="is-italic">@geosolconsulting</p>
        </div> <!--end of the column-->
        <div class="column">
          <div class='icon social in'><i class='fa fa-linkedin'></i></div>
          <p class="">LINKEDIN</p>
          <p class="is-italic">@geosolconsulting</p>
        </div> <!--end of the column-->
      </div><!--end of the columns-->
    </div> <!--end of section-->

    @include('_includes.footer')<!--includes the footer -->

  </body>

  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

</html>
