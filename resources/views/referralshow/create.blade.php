<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Links Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>




<div class="container "  style="margin-top: 120px;">
  <div class="row align-items-start">
    <div class="col-2">
    </div>
    <div class="col-8 mt-4">
     
 
     

 <h3 class="mb-3">Enter your informations and get the code</h3>
 <hr>

  <form action="/links/referrals/store" method="post">
    
    @csrf

     <div class="mb-3">
    <label for="first_name" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp">
    
    </div> 
    <div class="mb-3">
    <label for="first_name" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp">
    
    </div> 
     <div class="mb-3">
    <label for="first_name" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    
    </div> 
     <div class="mb-3">
    <label for="first_name" class="form-label">Coupon:</label>
    <input type="text" class="form-control" id="coupon" name="coupon" aria-describedby="emailHelp">
    
    </div> 
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    </div>
    <div class="col-2">
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>