


<x-dashboard>
<div class="dash_header">
    <div class="dash_header_left">
        <h4 style="font-weight: bold;">Links</h4>
    </div>
     
    <div class="dash_header_right">
        <a   class="new-add-btn" href="/dashboard/links/create">
            New Link
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

@foreach($links as $link)
    
    <div class="ad-card">
        <div>
            
            <a href="/dashboard/links/show/{{$link->id}}"> {{ substr( $link->title, 0,  60) }}
            </a>

            
        </div>
        
        <div class="actions">
    
        </div>
        
</div>
        
</span>

@endforeach

<div class="ads-links">
    
    {{ $links->links()}}
</div>

</x-dashboard>



