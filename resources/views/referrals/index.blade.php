


<x-dashboard>
<div class="dash_header">
    <div class="dash_header_left">
        <h4 style="font-weight: bold;">Referrals</h4>
    </div>
     
    <div class="dash_header_right">
        <a   class="new-add-btn" href="/dashboard/referrals/create">
            New Referral
        </a>
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
    
    <div class="ad-card">
        <div>
            
            <a href="/dashboard/referrals/show/{{$referral->id}}"> {{ substr( $referral->first_name, 0,  60) }}
            </a>

            
        </div>
        
        <div class="actions">
    
        </div>
        
</div>
        
</span>

@endforeach

<div class="ads-links">
    
    {{ $referrals->links()}}
</div>
</x-dashboard>



