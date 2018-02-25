
  <nav class="navbar is-fixed-top">
    <div class="navbar navbar-menu is-hidden-desktop is-fixed-top" id="navMenu">
      <div class="navbar-brand m-l-100 m-t-30">
        <a class="navbar-item" href="#">
          <img src="https://bulma.io/images/bulma-logo.png" alt="LOGO" width="112" height="28">
        </a>
      </div> <!--end navbar brand is hidden -->

    <div class="container is-fullscreen">
          <navbar-item class="vertical m-l-100 m-t-10">
            <ul>
              <li><a href="/">HOME</a></li>
              <hr>
              <li><a href="{{route('service')}}">WHAT WE DO</a></li>
              <hr>
              <li><a href="">OUR STORY +</a>
                <hr>
                <ul>
                  <div class="">
                    {{-- <div class="column">
                      <div class="" id="cool"></div>
                    </div> --}}
                    <div class="">
                        <li><a href="{{route('about')}}">ABOUT</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">PROJECTS</a></li>
                    </div>
                  </div>
                </ul>
              </li>
              <li><a href="{{route('contact')}}">CONTACT</a></li>
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

  <div class="navbar-menu navbar-end">
      <div class="navbar-brand navbar-item m-l-100 m-t-10">
        <a href="#">
          <img src="https://bulma.io/images/bulma-logo.png" alt="LOGO" width="112" height="28">
        </a>
      </div> <!--end navbar display the logo alone-->
      <div class="navbar-burger navbar-item burger m-r-100 m-t-30" data-target="navMenu">
  				<span></span>
  				<span></span>
  				<span></span>
  		</div>
  </div><!--end burger visible on all devicec-->
</nav> <!--end navbar -->
