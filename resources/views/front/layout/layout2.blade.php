<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
  
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{asset('themes/bootshop/bootstrap.min.css')}}" media="screen"/>
    <link href="{{asset('')}}themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="{{asset('')}}themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="{{asset('')}}themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{asset('')}}themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('')}}themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('')}}themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('')}}themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('')}}themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('')}}themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
@include('front.layout.header')
<!-- Header End====================================================================== -->
@yield('slider')
<div id="mainBody">
	<div class="container">
	<div class="row">
    @yield('content')
		</div>
	</div>
</div>
@include('front.layout.footer')
<!-- Footer ================================================================== -->

<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{asset('')}}themes/js/jquery.js" type="text/javascript"></script>
	<script src="{{asset('')}}themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="{{asset('')}}themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="{{asset('themes/js/jquery.lightbox-0.5.js')}}"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

</body>
</html>