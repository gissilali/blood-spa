<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Blood Bank</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/css/config.css">
	<link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta name="_token" content="{{ csrf_token() }}" id="csrf_token">
	<meta name="_root" content="{{ url('') }}">
	<style>
		.header{
			background:#ff2a2a;
		}
		.logo{
			color:white;
			float: left;
			padding-top:30px;
			padding-bottom: 30px;
		}
		.nav-right{
			float: right;
			padding-top:45px;
		}
		.nav-right > a{
			margin-left:40px;
			font-weight: 400;
			color:white;
			font-size: 18px;
		}
		.logo > .title{
			margin:0;
		}
		.banner{
			
		}
		.main-content{
			padding-top:40px;
		}
	</style>
</head>
<body>
	<div id="app">
		<div class="header clearfix">
		<div class="container">
		  <div class="row">
			  <div class="logo">
				<h1 class="title">Blood Bank</h1>
				<p><small>Something I did to learn vue JS</small></p>
			</div>
			<nav class="nav-right">
				<router-link to="/register">Register</router-link>
				<router-link to="/about">about</router-link>
				<router-link to="/login">login</router-link>
			</nav>
		  </div>
	  </div>
	  </div>
  <div class="main-content">
		<router-view></router-view>
  </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>