<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TSRX">
  <!-- Fav Icon -->
  <link rel="icon" href="{{ asset('frontendassets/assets/img/favicon.png') }}" type="image/x-icon">

  <title>TSRX - Pharmacy||Clinical and Wellness</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ url('frontendassets/assets/css/bootstrap.min.css') }}" rel="stylesheet">


  <!-- Stylesheets -->
  <link href="{{ url('frontendassets/assets/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/fontawesome.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/animate.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontendassets/assets/css/style.css') }}" rel="stylesheet">


  <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body class="home">


  @include('frontendlayout.header')

  @yield('content')

  @include('frontendlayout.footer')


  <!-- jequery plugins -->
  <script src="{{ url('frontendassets/assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/popper.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/jquery.sticky.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('frontendassets/assets/js/main.js') }}"></script>


 
  <!-- <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>-->


    <link rel="stylesheet" type="text/css" href="{{ url('frontendassets/assetsold/css/jquery.datetimepicker.css') }}"/>
    <script src="{{ url('frontendassets/assetsold/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('frontendassets/assetsold/js/jquery.datetimepicker.full.js') }}"></script>


  <script>
    jQuery(document).ready(function () {
    'use strict';

    jQuery('#funddate, #commdate').datetimepicker({format: 'Y-m-d',timepicker: false});

    jQuery('#voldatetime').datetimepicker({format: 'Y-m-d H:i',timepicker: true});

    jQuery('#expiry').datetimepicker({format: 'Y-m-d',timepicker: false});
   });
  </script>

  



  <script>

      // if desktop device, use DateTimePicker
      $("#datetimepicker").datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });

    
  </script>

</body>

</html>