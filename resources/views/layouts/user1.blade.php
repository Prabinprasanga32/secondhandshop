@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/footerstyle.css">
    <link rel="stylesheet" href="../css/userstyle.css">
</head>
<body>
    <div id="gradient"></div>
<div id="card">
  <img src="../image/user.png"/>
<br>
  <h2>Bhuwan Adhikari</h2>
  <p style="font-weight:bold">Student of IT in University of West London.</p>
  <p>Email: bhuwanadhikari50@gmagil.com</p>
  <span class="left bottom">tel:07440215489</span>
  <span class="right bottom">PostCode: UB6 8sQ</span>
</div>
</body>
</html>
@include('layouts.footer')
@endsection