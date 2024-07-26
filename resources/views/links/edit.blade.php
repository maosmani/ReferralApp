
<x-dashboard>
<div class="dash_header">
 <div class="dash_header_left">
   <h4 style="font-weight: bold;">Update Link</h4>
  </div>
  <div class="dash_header_right">
  </div>
  
</div>
<div class="content">
  <div class="createform">

    <form action="/dashboard/links/{{$link->id}}" method="post">
    @csrf
    @method("PATCH")

     <div class="form-group">
     <label for="title">Title</label>
      <input class="title-input" id="title" name="title" type="text"  value="{{$link->title}}">
    </div>
     <div class="form-group">
      <label class="body-label">Message</label>
      <br>
    
     <textarea id="summernote" name="message"></textarea>
    </div>
    <br>
    <!--
     <div class="form-group">
     <label for="title">Url Slug</label>
      <input class="title-input" id="slug" name="slug" type="text" placeholder="Enter url slug here">
    </div>
-->
  
    <button  class="save-btn"  type="submit">Save</button>
  </form>
    
  </div>
</div>
  

    
</x-dashboard>


<script>

var markupStr =  {!! json_encode($link->message) !!};
 $('#summernote').summernote('code', markupStr);

</script>