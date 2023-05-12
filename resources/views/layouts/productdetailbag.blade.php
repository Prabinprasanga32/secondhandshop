@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/footerstyle.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 90%;
            max-width: 960px;
            margin: 0 auto;
        }
        .product {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }
        .product-img {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-right: 20px;
        }
        .product-info {
            width: 100%;
            max-width: 400px;
        }
        .product-info h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }
        .product-info p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #666;
            line-height: 1.5;
        }
        .product-info span {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }
        .product-info .user {
            color: #666;
            font-size: 14px;
        }
        @media only screen and (max-width: 768px) {
            .product {
                flex-direction: column;
                align-items: center;
            }
            .product-img {
                margin-right: 0;
                margin-bottom: 20px;
            }
            .product-info {
                max-width: none;
                text-align: center;
            }
            a:hover{
			color:#ffffff !important;
			background:#1ecbe1 !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product">
            <img src="../image/bag.jpg" alt="Product Image" class="product-img">
            <div class="product-info">
                <h2>Product Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo magna ut enim aliquam, vel tempus lacus eleifend. Proin eget libero vel nulla commodo ultricies eu eget mi. Nam dapibus gravida metus, id pharetra quam molestie et. Nullam hendrerit sapien sed consequat efficitur. Cras vel dui massa.</p>
                <span>$99.99</span>
                <div class="user">Posted by John Doe</div>
                <br>
                <div class="botton">
                    <a href="/user/3" style="text-decoration:none;
                    border: 2px solid #1ecbe1; 
                    padding:4px; 
                    border-radius:10px; 
                    color:#000000;">Contact with Seller</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@include('layouts.footer')
@endsection