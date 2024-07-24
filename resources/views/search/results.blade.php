


<x-dashboard>
<div class="dash_header">
<div class="search">

    <div class="search-input">
    <form method="POST">
    @csrf
    <input  class="search-input-field"type="search" id="search_term" name="search_term" placeholder="Enter Last Name"> 
    <button class="search-button"> Search</button>
    </form>
    </div>

     
    
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
@foreach($referrals as $referral)
    
    <div class="results-card">
        <div>
            
            <a href="/dashboard/referrals/show/{{$referral->id}}"> {{ substr( $referral->first_name, 0,  60) }}
            </a>

            
        </div>
        
        
</div>
        
</span>

@endforeach

<div class="ads-links">
    
    {{ $referrals->links()}}
</div>



</x-dashboard>



