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

      <link rel="stylesheet" href=""/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head> <!-- end of the header-->

  <body>
    <div class="">
      <nav class="uk-navbar uk-navbar-transparent uk-navbar-container uk-margin">
         <div class="uk-navbar-right">
             <a class="uk-navbar-toggle" href="#">
                 <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
             </a>
         </div>
      </nav>  
    </div>



  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma Templates</strong> by <a href="https://github.com/dansup">Daniel Supernault</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
        </p>
        <p>
          <a class="icon" href="https://github.com/dansup/bulma-templates">
            <i class="fa fa-github"></i>
          </a>
        </p>
      </div>
    </div>
  </footer>
</div>

  <!--Scripts-->

</body>
</html>
