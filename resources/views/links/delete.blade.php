
<x-dashboard>
<div class="dash_header">
 <div class="dash_header_left">
   <h4 style="font-weight: bold;">Delete Link</h4>
  </div>
 
  
</div>
<div class="content">
  <div class="createform">

    <div class="delete-card">
       <p>Do you want to delete this Link?</p> <br>
    
    <button  class="delete-card-delete-btn"  type="submit" form="delete-form">Delete</button>
    <button  class="delete-card-cancel-btn"  type="submit"><a href="/dashboard/links/">Cancel</a></button>
      
    </div>
    

    
    <form  method="POST" action="/dashboard/links/{{$link->id}}" id="delete-form" class="hidden" >
      @csrf
      @method('DELETE')

      
    </form>

  </div>
</div>
  


    
</x-dashboard>


