<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank you</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>



<div class="container  "  style="margin-top: 60px;">
  <div class="row align-items-start">
    <div class="col-2">
    </div>
    <div class="col-8 mt-4">
 <h4 class="mb-2">Congratulations!</h4> <hr>
 <p>Your exclusive coupon code and serial number are ready.
 Save them now, either by taking a screenshot or downloading this PDF.</p>

 @foreach($referral as $item)
 <div class="vr"></div>
<strong class="mb-2">Serial Number: </strong> {{$item->id}} <br>
 <strong class="mb-2">First Name: </strong> {{$item->first_name}} <br>
 <strong class="mb-2">Last Name: </strong> {{$item->last_name}}   <br>
 <strong class="mb-2">Email: </strong> {{$item->email}}  <br>
 <strong class="mb-2">Coupon Code: </strong> {{$item->coupon}} <br>

  @endforeach



    </div>
    <div class="col-2">
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
