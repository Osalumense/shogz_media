<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{config('app.name')}} - @yield('title')</title>
        {{-- <title>Olusoga Olugbenga &mdash; Brand strategist and PR Manager</title> --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content='@yield('description')'/>
        <meta name="keywords" content="@yield('keywords')"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <meta name="description" content="">
        <meta name="keywords" content="html, css, javascript, jquery"> --}}
        <meta name="author" content="">

        <link rel="stylesheet" href="{{asset('css/vendor/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor/aos.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor/jquery.fancybox.min.css')}}">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">
    @include('layouts.front_end.section.header')
    
        @yield('content')


    @include('layouts.front_end.section.footer')
    </div>

        
    <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
        <div class="site-loader"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    {{-- <script src="{{asset('js/scripts-dist.js')}}"></script> --}}
    <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/vendor/aos.js')}}"></script>
    <script src="{{asset('js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/vendor/TweenMax.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/vendor/jarallax.min.js')}}"></script>
    <script src="{{asset('js/vendor/jarallax-video.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/vendor/stickyfill.min.js')}}"></script>
    <script src="{{asset('js/vendor/imagesloaded.npm pkgd.min.js')}}"></script>
    <script src="{{asset('js/vendor/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('js/vendor/scrollmagic.animation.gsap.min.js')}}"></script>
    
    <script src="{{asset('js/main.js')}}"></script>
    @stack('scripts')

    <script>
      let typed = document.querySelector('.typing'); 
      if(typed) {
        window.addEventListener('load', () => {
          let arr = [
              "Brand strategist", 
              "PR Manager", 
              "Actor",
              "Red carpet host"
            ];
          let typed = new Typed(".typing", {
              strings: arr,
              typeSpeed: 100,
              backSpeed: 60,
              loop: true
          });
        });
      }
    </script>
    <script>
      $(window).scroll(function() {
          let height = $(window).scrollTop();
          if (height > 200) {
            console.log('scrolled')
            $('#back-to-top').show('slow');
          } else {
            $('#back-to-top').hide();
          }
      });
      $(document).ready(function() {
          $("#back-to-top").click(function(event) {
              event.preventDefault();
              $("html, body").animate({ scrollTop: 0 }, "slow");
              return false;
          });

      });
    </script>

    </body>
</html>