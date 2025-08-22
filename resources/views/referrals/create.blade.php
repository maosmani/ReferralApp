
<x-dashboard>
<div class="dash_header">

 <div class="dash_header_left">
        <h4 style="font-weight: bold;">New Referral</h4>
    </div>


</div>
<div class="content">
  <div class="createform">
<div class="referral-card-create" >
    <form action="/dashboard/referrals/store" method="post">
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

    <div class="save-btn__container">
        <button  class="save-btn"  type="submit">Save</button>

    </div>

  </form>

  </div>
</div>
</div>



</x-dashboard>
