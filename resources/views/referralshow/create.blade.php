

  
</div>
<div class="content">
  <div class="createform">
<div class="referral-card-create" >
    <form action="/links/referrals/store" method="post">
    @csrf
    <div class="form-group">
      <label for="title">First Name</label>
      <input class="title-input" id="first_name" name="first_name" type="text" placeholder="Enter First Name">
    </div>
    <div class="form-group">
     <label for="title">Last Name</label>
      <input class="title-input" id="last_name" name="last_name" type="text" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
     <label for="title">Email</label>
      <input class="title-input" id="email" name="email" type="text" placeholder="Enter Email">
    </div>
    <div class="form-group">
     <label for="title">Coupon code</label>
      <input class="title-input" id="coupon" name="coupon" type="text" placeholder="Enter Coupon code">
    </div>
  
    <button  class="save-btn"  type="submit">Save</button>
  </form>
    
  </div>
</div>
</div>


    

