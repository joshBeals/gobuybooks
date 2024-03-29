<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name', 'GoBuyBooks') }} @yield('title')</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/logo/logo.png') }}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body class="template-index belle template-index-belle">

    @yield('content')
    
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
    @include('partials.footer')
    
    <!-- Newsletter Popup -->
	<div class="newsletter-wrap" id="popup-container">
      <div id="popup-window">
        <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
        <!-- Modal content-->
        <div class="display-table splash-bg">
          <div class="display-table-cell width40"><img src="{{ asset('images/logo/library.jpg') }}" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
          <div class="display-table-cell width60 text-center">
            <div class="newsletter-left">
              <h2>Join Our Mailing List</h2>
              <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
              <form action="#" method="post">
                <div class="input-group">
                  <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                      <span class="input-group__btn">
                      	<button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                      </span>
                  </div>
              </form>
              <ul class="list--inline site-footer__social-icons social-icons">
                <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- End Newsletter Popup -->
    
    <!-- Including Jquery -->
    <script src="{{asset('/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <!-- <script src="{{asset('/js/vendor/modernizr-3.6.0.min.js')}}"></script> -->
    <!-- <script src="{{asset('/js/vendor/jquery.cookie.js')}}"></script> -->
    <script src="{{asset('/js/vendor/wow.min.js')}}"></script>
    <!-- Including Javascript -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/plugins.js')}}"></script>
    <!-- <script src="{{asset('/js/popper.min.js')}}"></script> -->
    <!-- <script src="{{asset('/js/lazysizes.js')}}"></script> -->
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/app.js')}}"></script>
</div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->
</html>