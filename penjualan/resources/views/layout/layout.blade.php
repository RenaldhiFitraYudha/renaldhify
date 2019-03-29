<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="http://localhost/penjualan/public/css/bootstrap.css">
</head>
<body>
<header>
@include('layout.header')
</header>
<ul>
@section('sidebar')
<li style="background-color:Tomato;"> HTML</li>
<li style="background-color:SlateBlue;">CSS</li>
<li style="background-color:LightGray;">JS</li>
<li style="background-color:Orange;">PHP</li>
</ul>
@show
<div class="container">
@yield('content')
</div>
</body>
</html>