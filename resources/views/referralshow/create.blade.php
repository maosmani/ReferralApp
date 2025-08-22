<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Your Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
      }
      .card {
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      }
      .btn-primary {
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 600;
      }
      h2 {
        font-size: 1.8rem;
        color: #111827;
      }
      label {
        font-weight: 500;
      }
    </style>
  </head>
  <body>

<div class="container" style="margin-top: 100px;">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4">
        <h2 class="mb-4 text-center fw-bold">Unlock Your Instant Code Right Now—It Only Takes 30 Seconds!</h2>
        <hr>

        <form action="/links/referrals/store" method="post">
          @csrf

          <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control rounded-pill" id="first_name" name="first_name" required>
          </div>

          <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control rounded-pill" id="last_name" name="last_name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control rounded-pill" id="email" name="email" required>
          </div>

          <div class="d-grid mt-3">
                     <button type="submit" class="btn btn-primary">
                       Reveal Code<i class="fas fa-paper-plane"></i>
                     </button>
        </form>

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
