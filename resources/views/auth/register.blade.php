


<x-layout.layout>



<div class="container mt-4"  >
  <div class="row"  style="margin-top: 96px;">
    <div class="col align-self-start">
    
    </div>
    <div class="col align-self-center">

      <div class="border p-4 rounded-3">

  <h3 class="mt-2">Rgister</h3><hr>

<form method="POST" action="/register">
  @csrf
 
   <div class="form-group mt-2">
    <label >Email Name:</label>
    <input type="email" class="form-control"  name="email"  placeholder="email">
  </div>
    <div class="form-group mt-2">
    <label >Password:</label>
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>
  <div class="form-group mt-2">
    <label >password confirmation:</label>
    <input type="password" class="form-control"  name="password_confirmation" placeholder="password confirmation">
  </div>
  
  <button type="submit" class="btn mt-4 btn-primary" style="background-color: #3D3B8E;">Rgister</button>
</form>

</div>
   
    </div>
    <div class="col align-self-end">
      
    </div>
  </div>
</div>


</x-layout.layout>