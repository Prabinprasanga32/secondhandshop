@extends('layouts.app')

@section('content')<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/userstyle.css">
    <link rel="stylesheet" href="../css/footerstyle.css">
</head>
<body>
    <div id="gradient"></div>
<div id="card">
  <img src="../image/user.png"/>
<br>
  <h2>Kushal Niraula</h2>
  <p style="font-weight:bold">Student of IT in University of West London.</p>
  <p>Email: kushalniraula50@gmagil.com</p>
  <span class="left bottom">tel:07440124852</span>
  <span class="right bottom">PostCode: UB6 8SG</span>
</div>
</body>
</html>
@include('layouts.footer')
@endsection