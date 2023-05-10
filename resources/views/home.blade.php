@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <link rel="stylesheet" href="./css/productstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
            
    </head>
    <body>

             <div class="container">
      <div class="box">
      <div class="image">
        <img src="./image/camera.jpg">
        </div>
        <div class="name_job">Product name</div>
        <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
        <div class="btns">
            <a href="product/camera">
          <button>View Product</button>
        </a>
        </div>
      </div>
      <div class="box">
        <div class="image">
        <img src="./image/bag.jpg" alt="">
        </div>
        <div class="name_job">Product name</div>
        <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
        <div class="btns">
            <a href="product/bag">
                <button>View Product</button>
              </a>
        </div>
      </div>
      <div class="box">
        <div class="image">
         <img src="./image/bottle.jpg" alt="">
        </div>
        <div class="name_job">Product name</div>
        <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
        <div class="btns">
            <a href="product/bottle">
                <button>View Product</button>
              </a>
        </div>
      </div>
    </div>
        </div>
        @include('layouts.footer')
    </body>
</html>

</div>
@endsection