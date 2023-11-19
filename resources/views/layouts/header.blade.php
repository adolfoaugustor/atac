<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<!-- Basic Page Needs
     ================================================== -->
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>@yield('title', setting('site.title'))</title>
   <meta name="description" content="{{ setting('site.description') }}">
   <meta name="keywords" content="{{ setting('site.meta_keywords') }}">
   <meta name="author" content="{{ setting('site.meta_author') }}">
	 
   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
   <meta name="format-detection" content="telephone=no">

   <!-- Favicons
   ================================================== -->
   <link rel="icon" type="image/png" href="{{setting('site.icon_favicon')}}">
   
   <!-- Fonts
   ================================================== -->
   <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
   
   <!-- CSS
   ================================================== -->
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- advisor -->
	<link rel="stylesheet" href="{{ asset('css/advisor.css') }}">
	<!-- plugins -->
	<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">	
	<!-- advisor color -->
	<link rel="stylesheet" id="color" href="{{ asset('css/color-default.css') }}">
	<!-- hero slider -->
	<link rel="stylesheet" href="{{ asset('css/hero-slider.css') }}">
	<!-- revolution slider -->
	<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
	
	<!-- ========== HEADER SCRIPTS =================== -->
	<script src="js/modernizr.js"></script>
	
</head>
   <body class="fixed-header">