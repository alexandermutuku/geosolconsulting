<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting Ltd.</title>

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
          <nav class="navbar is-transparent is-fixed-top m-l-50 m-t-10 m-r-50">
              <div class="">
                <div class="navbar-brand">
                  <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" alt="LOGO" width="112" height="28">
                  </a>
                  <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div><!--end hamburger visible on Mobile devices -->
                </div> <!--end navbar brand -->
              </div>

              <div class="">
                <div class="navbar navbar-menu is-hidden-desktop is-fixed-top" id="navMenu">
                  <div class="navbar-brand m-l-50 m-t-10">
                    <a class="navbar-item" href="https://bulma.io">
                      <img src="https://bulma.io/images/bulma-logo.png" alt="LOGO" width="112" height="28">
                    </a>
                  </div> <!--end navbar brand -->

                <div class="container is-fullscreen">
                      <navbar-item class="vertical">
                        <ul>
                          <li><a href="">HOME</a></li>
                          <hr>
                          <li><a href="">WHAT WE DO</a></li>
                          <hr>
                          <li><a href="#">OUR STORY +</a>
                            <hr>
                            <ul>
                              <div class="">
                                {{-- <div class="column">
                                  <div class="" id="cool"></div>
                                </div> --}}
                                <div class="">
                                    <li><a href="#">ABOUT</a></li>
                                    <li><a href="#">BLOG</a></li>
                                    <li><a href="#">PROJECTS</a></li>
                                </div>
                              </div>
                            </ul>
                          </li>
                          <li><a href="">CONTACT</a></li>
                          <hr>
                        </ul>
                      </navbar-item>
                      <navbar-item class="vertical demopadding">
                        <div class='icon social fb'><i class='fa fa-facebook'></i></div>
                        <div class='icon social fb'><i class='fa fa-google'></i></div>
                        <div class='icon social tw'><i class='fa fa-twitter'></i></div>
                        <div class='icon social in'><i class='fa fa-linkedin'></i></div>
                      </navbar-item>
                </div>
              </div>
            </div>


              <div class="navbar-menu navbar-end">
                <div class="navbar-burger burger navbar-item " data-target="navMenu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div><!--end burger visible on desktop devices -->
              </div>
            </nav> <!--end navbar -->

          <div class="hero-body">
            <div class="container fullheight">
              <div class="container has-text-centered">

              <div class="column is-6 is-offset-3">
                <h1 class="title is-2">
                  GROUNDWATER SOLUTIONS
                </h1>
                <h2 class="subtitle m-t-20">
                  Let this cover page describe a product or service, Let this cover
                  page describe a product or service.
                </h2>
                <br>
                <p class="has-text-centered">
                    <a href="" class="">DISCOVER MORE </a>
                </p>

                <p class="has-text-centered m-t-100">
                    <a href="" class="">SCROLL TO CONTINUE </a>
                </p>
              </div>
              {{-- <h1>Here Goes in the content of the Landing page</h1> --}}
            </div> <!--try using the hero page styles -->
          </div>
        </div>
      </section> <!--end of landing  page -->

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
              Superhero Scaffolding
            </h1>
            <h2 class="subtitle is-4 m-t-20">
              Lorem ipsum dolor sit amet,
            </h2>
            <p class="lead">
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            <p class="has-text-right">
              <a  href="" class="is-medium is-info is-outlined">
                DISCOVER MORE
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-6 is-offset-1 has-text-left p-r-100">
            <h1 class="title is-2 p-t-20">
              Superhero Scaffolding
            </h1>
            <h2 class="subtitle is-4 m-t-20">
              Lorem ipsum dolor sit amet,
            </h2>
            <p class="lead">
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            <p class="has-text-right">
              <a  href="" class="is-medium is-info is-outlined">
                DISCOVER MORE
              </a>
            </p>
          </div>
          <div class="column is-5">
            <div class="columns">
              <div class="column">
                <figure class="image is-0.5by1">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-0.5by0.5">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-2by3">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
              </div>

              <div class="column">
                <figure class="image is-2by1">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-2by3">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
                <figure class="image is-2by3">
                  <img src="http://placehold.it/800x600" alt="Description">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cta">
      <p class="has-text-centered">
        <span class="tag is-primary">New</span> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </div> <!-- Our call to goes here-->



        <div class="section">
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
                  </div><!--end of the card content-->
                </div>
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
              </div>
            </div><!--end of the column-->
          </div>
        </div>

        <footer class="footer">
          <div class="container">
            <div class="content has-text-centered">
              <p>
                <strong>Bulma</strong> by <a href="#">Jeremy Thomas</a>. The source code is licensed
                <a href="#">MIT</a>. The website content
                is licensed <a href="#">CC BY NC SA 4.0</a>.
              </p>
            </div>
          </div>
        </footer><!--end of footer -->
    </body>

  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

</html>
