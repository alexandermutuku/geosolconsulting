<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting</title>

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
          <div class="">

<<<<<<< HEAD
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
                              <div class="columns">
                                <div class="column">
                                  <div class="" id="cool"></div>
                                </div>
                                <div class="column">
                                    <li><a href="#">BLOG</a></li>
                                    <li><a href="#">PROJECTS</a></li>
                                    li><a href="#">PROJECTS</a></li>
                                </div>
                              </div>
                            </ul>
                          </li>
                          <li><a href="">CONTACT</a></li>
                          <hr>
                        </ul>
                      </navbar-item>
                    </div>
=======
            <nav class="navbar is-transparent is-fixed-top m-l-50 m-r-50">
>>>>>>> parent of 7842b43... fixed fullscreen menu

              <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                  <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div class="navbar-menu navbar-end">
                <div class="navbar-burger burger navbar-item " data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              {{-- <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                  <a class="navbar-item is-tab" href="https://bulma.io/">
                    Home
                  </a>
                  <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/documentation/overview/start/">
                      Docs
                    </a>
                    <div class="navbar-dropdown is-boxed">
                      <a class="navbar-item" href="/documentation/overview/start/">
                        Overview
                      </a>
                      <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                        Modifiers
                      </a>
                      <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                        Columns
                      </a>
                      <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                        Layout
                      </a>
                      <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                        Form
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                        Elements
                      </a>
                      <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                        Components
                      </a>
                    </div>
                  </div>
                </div>
              </div> --}}
            </nav> <!--end navbar -->

          <div class="hero-body">
            <div class="container">
              <h1 class="title m-t-100">
                Full Height title
              </h1>
              <h2 class="subtitle">
                Full Height subtitle
              </h2>
            </div>
          </div>
        </section> <!--end of land page -->
        <div class="section">
          <div class="columns">
            <div class="column">
                <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                    </figure>
                  </div>
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
            </div> <!--end of the column-->

            <div class="column">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>
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
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>
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

</html>
