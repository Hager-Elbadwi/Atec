<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ATEC |Obour Traning Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet"  href="{{asset('siteassets/css/bootstrap.css')}}"  type="text/css"/>
    @if (app()->getLocale()=='ar') 

    <link rel="stylesheet"  href="{{asset('siteassets/css/bootstrap-rtl.css')}}"  type="text/css"/>

	  @endif
    <link rel="stylesheet" href="{{asset('siteassets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('siteassets/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('siteassets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('siteassets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('siteassets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('siteassets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('siteassets/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('siteassets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('siteassets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('siteassets/css/style.css')}}">
  </head>
  <body>
@include('layouts.navbar')
@include('layouts.header')
@yield('content')
@include('layouts.footer')





  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('siteassets/js/jquery.min.js')}}"></script>
  <script src="{{asset('siteassets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('siteassets/js/popper.min.js')}}"></script>
  <script src="{{asset('siteassets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('siteassets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('siteassets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('siteassets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('siteassets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('siteassets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('siteassets/js/aos.js')}}"></script>
  <script src="{{asset('siteassets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('siteassets/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('siteassets/js/google-map.js')}}"></script>
  <script src="{{asset('siteassets/js/main.js')}}"></script>
    
  </body>
</html>