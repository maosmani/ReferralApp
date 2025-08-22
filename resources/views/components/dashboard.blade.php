<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/css/dashboard/dashboard.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <link href="resources/css/app.css" rel="stylesheet">

    <title>Referrals</title>
</head>
<body>

   <div class="dashboard">

    <!--
       <div class="dashboard-navbar">

        <div>
            <img style="color: white;" src="/assets/img/logo-white.svg">
        </div>

        <div>


                    @auth
                                    <form method="POST" action="/logout">
                                        @csrf

                                            <button style="color: whitesmoke;">
                                                <i class="material-icons" style="font-size:24px;">logout</i>
                                            </button>
                                    </form>
                    @endauth

        </div>



       </div>
       -->

       <div class="dashboard-layout">
                        <div class="dashboard-layout__left">

                        <div class="logo">
                            <h1>Logo</h1>

                        </div>


                         <ul>
                             <li
                                       class="
                                      @if (request()->routeIs('dashboard')) active
                                      @else ''
                                      @endif "
                             >
                                <i class="material-icons" style="font-size:32px;">dashboard</i>
                                 <a href="/dashboard/">

                                 Dashboard
                             </a>
                             </li>


                  <li
                                       class="
                                      @if (request()->routeIs('links')) active
                                      @else ''
                                      @endif "
                             >
                    <i class="material-icons "  style="font-size:32px;">link</i>

                                 <a href="/dashboard/links" >Links</a>
                             </li>


                 <!-- <li
                                       class="
                                      @if (request()->routeIs('dashboard')) active
                                      @else ''
                                      @endif "
                             >
                    <i class="material-icons" style="font-size:32px;">ads_click</i>

                                 <a href="/dashboard/">Referrals</a>
                             </li>
                         -->



                   <li
                                       class="
                                      @if (request()->routeIs('search')) active
                                      @else ''
                                      @endif "
                             >

                    <i class="material-icons" style="font-size:32px;">search</i>

                                 <a href="/dashboard/search">Search</a>
                             </li>
                                                     </ul>
                                             </div>
                            <div class="dashboard-layout__right">

                                <div class="dashboard-header">
                                    <p>This is header... </p>
                                </div>

                                 <div class="dashboard-layout__right__content">

                                    {{ $slot }}
                                </div>





                            </div>

       </div>
<!--
<script src="/assets/js/index.js"></script>
<title>{{ $title ?? 'Todo Manager' }}</title>
-->
<script src="/{{ $script ?? 'assets/js/index.js' }}">

</script>



</body>
</html>
