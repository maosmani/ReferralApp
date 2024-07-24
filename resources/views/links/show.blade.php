


<x-dashboard>
<div class="dash_header">
    <div class="dash_header_left">
        <h4 style="font-weight: bold;">Link </h4>
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

<div class="referral-card-info" >

  <h1>{{$link->title}}</h1> <br>

 

{!!html_entity_decode($link->message)!!}<br>
  
  {{$link->slug}}


</div>


</x-dashboard>



