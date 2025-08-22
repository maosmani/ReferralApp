


<x-dashboard>
<div class="dash_header">
    <div class="dash_header_left">
        <h4 style="font-weight: bold;">Referral</h4>
    </div>

</div>
<!--
<div class="title-card">
    <div>
        <p>Title</p>
    </div>

        <div class="actions-title">
            <p>Actions</p>
        </div>

</div>
-->
<div class="title-card">
    <div>
        <p></p>
    </div>

        <div class="actions-title">
            <p></p>
        </div>

</div>
<div class="referral-card-info">
    <strong>First name:</strong> {{$referral->first_name}} <br>
    <strong>Last name:</strong> {{$referral->last_name}} <br>
    <strong>Email:</strong> {{$referral->email}} <br>
    <strong>Coupon code:</strong> {{$referral->coupon}} <br>
</div>



</x-dashboard>
