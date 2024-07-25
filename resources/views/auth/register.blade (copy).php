<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


<h1>Register</h1>

<form method="POST" action="/register">
  @csrf
  <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control"  name="first_name" placeholder="Enter First Name">
  </div>

   <div class="form-group">
    <label >Last Name:</label>
    <input type="text" class="form-control"  name="last_name" placeholder="Enter Last Name">
  </div>
   <div class="form-group">
    <label >Email Name:</label>
    <input type="email" class="form-control"  name="email"  placeholder="email">
  </div>
    <div class="form-group">
    <label >Password:</label>
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label >password_confirmation:</label>
    <input type="password" class="form-control"  name="password_confirmation" placeholder="password_confirmation">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>