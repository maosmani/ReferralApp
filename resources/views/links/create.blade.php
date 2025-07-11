
<x-dashboard>
<div class="dash_header">

 <div class="dash_header_left">
        <h4 style="font-weight: bold;">New Link</h4>
</div>


</div>
<div class="content">
  <div class="createform">
<div class="referral-card-create" >
    <form action="/dashboard/links/store" method="post">
    @csrf

     <div class="form-group">
     <label for="title">Title</label>
      <input class="title-input" id="title" name="title" type="text" placeholder="Enter your  title here">
    </div>
     <div class="form-group">
      <label class="body-label">Message</label>
      <br>

     <textarea id="summernote" name="message"></textarea>
    </div>
    <br>
     <div class="form-group">
     <label for="title">Url Slug</label>
      <input class="title-input" id="slug" name="slug" type="text" placeholder="Enter url slug here">
    </div>

    <button  class="save-btn"  type="submit">Save</button>
  </form>

  </div>
</div>
</div>



</x-dashboard>
