<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Links Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>




<div class="container text-center"  style="margin-top: 120px;">
  <div class="row align-items-start">
    <div class="col-2">
    </div>
    <div class="col-8 mt-4">

     <h1>{{$link->title}}</h1> <br>

     {!!html_entity_decode($link->message)!!}<br>

     <a href="/links/referrals/create"></a>

     <a href="/links/referrals/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Get Your Referral Code Now</a>
    </div>
    <div class="col-2">
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
