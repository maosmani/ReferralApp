


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

  <div class="links-control-btn-card">

  <a class="links-control-btn" href="/dashboard/links/{{$link->id}}/edit">Update <i class="material-icons" id="material-icons-links" style="font-size:18px;color: white;">update</i></a>
<a  class="links-control-btn" href="/dashboard/links/delete/{{$link->id}}">Delete <i class="material-icons" style="font-size:18px;color: white;">delete</i></a>
  </div>
<!-- Meeting URL -->
<!--
            <div class="mt-4">
                <p class="text-gray-500">Link URL:
                    <span id="meeting-url" class="font-medium text-blue-600">
                        {{$baseUrl . '/links/' . $link->slug}}
                    </span>
                    <button
                        onclick="copyToClipboard('{{$baseUrl . '/links/' . $link->slug}}')"
                        class="ml-2 bg-blue-500 text-white text-xs px-2 py-1 rounded hover:bg-blue-600 transition duration-300">
                        Copy
                    </button>
                </p>
            </div>

            <a class="new-add-btn" href="/dashboard/links/{{$link->id}}/edit"><i class="material-icons" style="font-size:24px;color: #6B7280;">update</i></a>
          <a  class="new-add-btn" href="/dashboard/links/delete/{{$link->id}}"><i class="material-icons" style="font-size:24px;color: #6B7280;">delete</i></a>

</div>
-->

<!--

<script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert('Link URL copied to clipboard!');
        }).catch(err => {
            console.error('Failed to copy: ', err);
        });
    }
</script>
-->


</x-dashboard>
