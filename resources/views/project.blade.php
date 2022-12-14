<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting | Blog</title>

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
                    The Company
                  </h1>
                  <div class="is-offset-3 p-l-50">
                    <h2 class="subtitle is-4 ">
                      Lorem ipsum dolor sit amet,
                    </h2>
                    <p class="lead">
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                  </div>

                  <br>
                  <p class="has-text-right has-text-weight-light"></p>
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
            {{-- <h1>Here Goes in the content of the Landing page</h1> --}}
          </div> <!--try using the hero page styles -->
        </div>
      </div> <!-- contents of landing page -->
    </section> <!--end of section-->

    <section class="section">
  <div class="container">

    <!-- FIRST ROW -->
    <div class="tile is-ancestor">
      <div class="tile is-12 is-parent">
        <article class="tile is-child pink post">
          <a class="post__category" href="">Other</a>
          <h2 class="post__title">Blog #2</h2>
          <div class="post__content">Pellentesque vestibulum dui in mauris varius, quis semper justo fringilla. Curabitur nec suscipit velit, eu aliquam sem. Aliquam erat volutpat. Praesent volutpat tincidunt porta. Mauris a maximus elit. Etiam ante tortor, faucibus sit amet gravida
            eget, accumsan et metus. Morbi sem metus, suscipit ac diam eget, aliquam pharetra est. Duis hendrerit nibh vel mi rhoncus sagittis. Suspendisse et lectus cursus, iaculis risus vitae, convallis nunc.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>
    </div>

    <!-- FIRST ROW -->

    <div class="tile is-ancestor">
      <div class="tile is-parent">
      <div class="card article">
        <div class="card-content">
        <article class="tile is-child green post">
          <a class="post__category" href="">Animals</a>
          <h2 class="post__title">Blog #1</h2>
          <div class="post__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt blandit tellus. Nam et varius lectus. Mauris placerat eros lorem, vitae aliquam elit viverra eget. Vestibulum et rhoncus ante.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>
    </div>
      </div>


      <div class="tile is-6 is-parent">
        <article class="tile is-child pink post">
          <a class="post__category" href="">Other</a>
          <h2 class="post__title">Blog #2</h2>
          <div class="post__content">Pellentesque vestibulum dui in mauris varius, quis semper justo fringilla. Curabitur nec suscipit velit, eu aliquam sem. Aliquam erat volutpat. Praesent volutpat tincidunt porta. Mauris a maximus elit. Etiam ante tortor, faucibus sit amet gravida
            eget, accumsan et metus. Morbi sem metus, suscipit ac diam eget, aliquam pharetra est. Duis hendrerit nibh vel mi rhoncus sagittis. Suspendisse et lectus cursus, iaculis risus vitae, convallis nunc.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>

      <div class="tile is-vertical is-parent">
        <article class="tile is-child blue post">
          <a class="post__category" href="">travel</a>
          <h2 class="post__title">Blog #3</h2>
          <div class="post__content">Cras aliquam sit amet turpis eget sodales. Praesent scelerisque aliquet rhoncus. Nunc rhoncus eros vehicula, sollicitudin ligula quis, ullamcorper nisl.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
        <article class="tile is-child gold post">
          <a class="post__category" href="">holidays</a>
          <h2 class="post__title">Blog #4</h2>
          <div class="post__content">Nulla neque tortor, posuere eget euismod sit amet, auctor non odio. Nulla quis aliquam nibh. Donec maximus metus nec posuere commodo.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>
    </div>

    <!-- SECOND ROW -->
    <div class="tile is-ancestor">
      <div class="tile is-6 is-parent">
        <article class="tile is-child gray post">
          <a class="post__category" href="">technology</a>
          <h2 class="post__title">Blog #5</h2>
          <div class="post__content">Duis mattis ex nisi, lobortis lacinia ipsum suscipit in. Quisque sed leo at purus eleifend porttitor. Quisque ultricies, erat a fringilla efficitur, urna arcu sodales erat, ac auctor mauris velit at elit. Duis fringilla diam egestas diam vehicula
            auctor. Cras non bibendum ex. Integer tempor mollis dignissim. Maecenas egestas tortor mi, in egestas mi vulputate vel. Suspendisse in mollis odio, et aliquet orci. Vivamus eleifend facilisis venenatis. Etiam lobortis nec turpis suscipit ullamcorper.
            Nunc vel lorem ac turpis luctus malesuada. Etiam vulputate vitae ex nec interdum. Maecenas condimentum volutpat turpis sed vulputate. Mauris egestas hendrerit fermentum. Proin non lacus dolor. Nulla ac hendrerit ante.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>

      <div class="tile is-vertical is-parent">
        <article class="tile is-child blue post">
          <a class="post__category" href="">trends</a>
          <h2 class="post__title">Blog #6</h2>
          <div class="post__content"> Etiam ante tortor, faucibus sit amet gravida eget, accumsan et metus. Morbi sem metus, suscipit ac diam eget, aliquam pharetra est. Duis hendrerit nibh vel mi rhoncus sagittis. Suspendisse et lectus cursus.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
        <article class="tile is-child gold post">
          <a class="post__category" href="">music</a>
          <h2 class="post__title">Blog #7</h2>
          <div class="post__content">Praesent rutrum turpis vitae massa dictum rhoncus. Nullam vel purus velit. Ut posuere velit quis arcu aliquet.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>

      <div class="tile is-parent">
        <article class="tile is-child red post">
          <a class="post__category" href="">fashion</a>
          <h2 class="post__title">Blog #8</h2>
          <div class="post__content">Duis mattis ex nisi, lobortis lacinia ipsum suscipit in. Quisque sed leo at purus eleifend porttitor. Quisque ultricies, erat a fringilla efficitur, urna arcu sodales erat, ac auctor mauris velit at elit.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>
    </div>

    <!-- THIRD ROW -->
    <div class="tile is-ancestor">
      <div class="tile is-8 is-vertical">
        <div class="tile fb-auto">
          <div class="tile is-parent">
            <article class="tile is-child blue post">
              <a class="post__category" href="">travel</a>
              <h2 class="post__title">Blog #9</h2>
              <div class="post__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt blandit tellus. Nam et varius lectus. Mauris placerat eros lorem, vitae aliquam.</div>
              <a class="post__permalink" href="">Learn more</a>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child gray post">
              <a class="post__category" href="">media</a>
              <h2 class="post__title">Blog #10</h2>
              <div class="post__content">Aliquam congue congue tempus. Aenean hendrerit nisl a massa venenatis bibendum. Nullam fermentum augue sit amet magna euismod luctus. Morbi massa neque.</div>
              <a class="post__permalink" href="">Learn more</a>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child red post">
              <a class="post__category" href="">animals</a>
              <h2 class="post__title">Blog #11</h2>
              <div class="post__content">Etiam ante tortor, faucibus sit amet gravida eget, accumsan et metus. Morbi sem metus, suscipit ac diam eget, aliquam pharetra est. Duis hendrerit nibh vel mi rhoncus sagittis. Suspendisse et lectus cursus.</div>
              <a class="post__permalink" href="">Learn more</a>
            </article>
          </div>
        </div>

        <div class="tile fb-auto">
          <div class="tile is-parent">
            <article class="tile is-child pink post">
              <a class="post__category" href="">technology</a>
              <h2 class="post__title">Blog #12</h2>
              <div class="post__content">Aliquam congue congue tempus. Aenean hendrerit nisl a massa venenatis bibendum. Nullam fermentum augue sit amet magna euismod luctus. Morbi massa neque.</div>
              <a class="post__permalink" href="">Learn more</a>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child gold post">
              <a class="post__category" href="">fashion</a>
              <h2 class="post__title">Blog #13</h2>
              <div class="post__content">Etiam ante tortor, faucibus sit amet gravida eget, accumsan et metus.</div>
              <a class="post__permalink" href="">Learn more</a>
            </article>
          </div>
        </div>
      </div>

      <div class="tile is-parent">
        <article class="tile is-child green post">
          <a class="post__category" href="">fashion</a>
          <h2 class="post__title">Blog #14</h2>
          <div class="post__content">Duis mattis ex nisi, lobortis lacinia ipsum suscipit in. Quisque sed leo at purus eleifend porttitor. Quisque ultricies, erat a fringilla efficitur.</div>
          <a class="post__permalink" href="">Learn more</a>
        </article>
      </div>
    </div>

  </div>
  <!-- /container -->
</section>

<!-- START ARTICLE FEED -->
    <section class="articles">
        <div class="column is-8 is-offset-2">

          <!-- START PROMO BLOCK -->
          <section class="hero is-danger is-bold is-small promo-block">
            <div class="hero-body">
              <div class="container">
                <h1 class="title">
                  <i class="fa fa-bell-o"></i>
                   Lorem dolor sed viverra
                </h1>
                <h2 class="subtitle">
                  Consequat id porta nibh venenatis cras sed felis eget
                </h2>
              </div>
            </div>
          </section>
          <!-- END PROMO BLOCK -->

          <!-- START ARTICLE -->
          <div class="card article">
            <div class="card-content">
              <div class="media">
                <div class="media-center">
                    <img src="http://www.radfaces.com/images/avatars/daria-morgendorffer.jpg" class="author-image" alt="Placeholder image">
                </div>
                <div class="media-content has-text-centered">
                  <p class="title article-title">Introducing a new feature for paid subscribers</p>
                  <p class="subtitle is-6 article-subtitle">
                    <a href="#">@d</a> on October 7, 2017
                  </p>
                </div>
              </div>

            <div class="content article-body">
                <p>Non arcu risus quis varius quam quisque. Dictum varius duis at consectetur lorem. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. </p>
                <p>Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat. Non sodales neque sodales ut etiam. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus.</p>
                <h3 class="has-text-centered">Feugiat sed lectus vestibulum mattis.</h3>
                <p> Molestie ac feugiat sed lectus vestibulum. Feugiat sed lectus vestibulum mattis. Volutpat diam ut venenatis tellus in metus vulputate. Feugiat in fermentum posuere urna nec. Pharetra convallis posuere morbi leo urna molestie at. Accumsan lacus vel facilisis volutpat est velit egestas. Fermentum leo vel orci porta. Faucibus interdum posuere lorem ipsum.
                </p>
              </div>
            </div>
          </div>
          <!-- END ARTICLE -->

          <!-- START ARTICLE -->
          <div class="card article">
            <div class="card-content">
              <div class="media">
                <div class="media-center">
                    <img src="http://www.radfaces.com/images/avatars/skeeter-valentine.jpg" class="author-image" alt="Placeholder image">
                </div>
                <div class="media-content has-text-centered">
                  <p class="title article-title">Sapien eget mi proin sed ????</p>
                  <p class="subtitle is-6 article-subtitle">
                    <a href="#">@skeetskeet</a> on October 7, 2017
                  </p>
                </div>
              </div>
            <div class="content article-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas. Sapien eget mi proin sed. Sit amet mattis vulputate enim.
              </p>
              <p>
              Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros. </p>
              <h3 class="has-text-centered">Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Cras tincidunt lobortis feugiat vivamus.</h3>
              <p>
                In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam. Arcu non sodales neque sodales ut etiam sit amet.
              </p>
              </div>
            </div>
          </div>
          <!-- END ARTICLE -->

          <!-- START PROMO BLOCK -->
          <section class="hero is-info is-bold is-small promo-block">
            <div class="hero-body">
              <div class="container">
                <h1 class="title">
                  <i class="fa fa-bell-o"></i>
                   Lorem dolor sed viverra
                </h1>
                <h2 class="subtitle">
                  Consequat id porta nibh venenatis cras sed felis eget
                </h2>
              </div>
            </div>
          </section>
          <!-- END PROMO BLOCK -->

          <!-- START ARTICLE -->
          <div class="card article">
            <div class="card-content">
              <div class="media">
                <div class="media-center">
                    <img src="http://www.radfaces.com/images/avatars/garth-algar.jpg" class="author-image" alt="Placeholder image">
                </div>
                <div class="media-content has-text-centered">
                  <p class="title article-title">Cras tincidunt lobortis feugiat vivamus.</p>
                  <p class="subtitle is-6 article-subtitle">
                    <a href="#">@galgar</a> on October 7, 2017
                  </p>
                </div>
              </div>
            <div class="content article-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas. Sapien eget mi proin sed. Sit amet mattis vulputate enim.
              </p>
              <p>
              Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros. </p>
              <h3 class="has-text-centered">Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Cras tincidunt lobortis feugiat vivamus.</h3>
              <p>
                In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam. Arcu non sodales neque sodales ut etiam sit amet.
              </p>
              </div>
            </div>
          </div>
          <!-- END ARTICLE -->
    </section>
    <!-- END ARTICLE FEED -->







    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">


        </div>
      </div>
    </div><!--end of hero-body-->

    @include('_includes.footer')<!--includes the footer -->

  </body>

  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

</html>
