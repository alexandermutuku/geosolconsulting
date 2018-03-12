<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting|Home </title>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!--styles-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.css">
      <link rel="stylesheet" href=""/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head> <!-- end of the header-->
    <body id='app'>
    <section class="hero is-transparent is-fullheight">

      @include('_includes.nav.main') <!--includes the main navigation -->

      <div class="hero-body">
        <div class="container fullheight">
          <div class="container has-text-left">
            <div class="column is-6 is-offset-2">
              <h1 class="title is-2">Locate and develop groundwater resources sustainbly</h1>
              <hr>
              <h2 class="subtitle">Where do i drill?, How deep do I drill?, How much water can I abstract ? ,
                What is it's quality? </h2>
              <br>

              <div data-wipe="DISCOVER MORE" class="has-text-weight-light">
                <a href="#" class="btn">DISCOVER MORE</a>
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
              What make us unique ?
            </h1>
            <hr>
            <h2 class="subtitle is-4 m-t-20 is-italic">
              Highly specialised
            </h2>
            <p class="lead ">
              We are highly specialised, we talk, eat, drink and sleep groundwater resources. In short in we are strictly a technical consultancy specialised in groundwater consultancy. We have learned overtime that this specialization has allowed us to focus on “core issues” and clearly understand trends impacting groundwater resources and evolved service offerings that address the shifting needs.
            </p>
            <br>

            <div data-wipe="DISCOVER MORE">
              <a href="#" class="btn">DISCOVER MORE</a>
            </div>

          </div>
        </div>
      </div>
    </div><!--end of hero-body-->

    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-6 is-offset-1 has-text-left p-r-100">
            <h1 class="title is-2 p-t-20">
              A diverse journey
            </h1>
            <hr>
            <h2 class="subtitle is-4 m-t-20">
              Solving diverse challenges
            </h2>
            <p class="lead">
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            <div data-wipe="DISCOVER MORE">
              <a href="#" class="btn">DISCOVER MORE</a>
            </div>
          </div>
          <div class="column is-5">
            <div class="columns">
              <div class="column">
                <figure class="image is-0.5by1">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-0.5by0.5 p-t-10">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
              </div>

              <div class="column">
                <figure class="image is-2by1">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!--end of hero-body-->

  <div class="hero-body">
    <div class="container">
      <div class="p-r-100 m-b-50">
        <h1 class="has-text-left">
          LATEST NEWS
        </h1>
        <hr>
      </div>
      <div class="columns">
        <div class="column">
            <div class="card">
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">John Smith</p>
                    <p class="subtitle is-6">@johnsmith</p>
                  </div>
                </div>

                <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                  <a href="#">#css</a> <a href="#">#responsive</a>
                  <br>
                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
              </div><!--end of the card-content-->
            </div><!--end of the card -->
        </div> <!--end of the column-->

        <div class="column">
          <div class="card">
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">John Smith</p>
                  <p class="subtitle is-6">@johnsmith</p>
                </div>
              </div>

              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">John Smith</p>
                  <p class="subtitle is-6">@johnsmith</p>
                </div>
              </div>

              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div><!--end of the card content-->
          </div><!--end of the card-->
        </div><!--end of the column-->
      </div><!--end of the columns-->
    </div><!--end of container-->
  </div> <!--end of section-->

    @include('_includes.footer')<!--includes the footer -->

  </body>

  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

</html>
