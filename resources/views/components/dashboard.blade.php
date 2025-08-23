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
                           <img src="/assets/img/ReffApp.svg" alt="logo" style="height:100px; width:auto;">

                        </div>


                         <ul>
                             <li class="{{ request()->is('dashboard') || request()->is('dashboard/referrals*') ? 'active' : '' }}">
                                 <i class="material-icons" style="font-size:32px;">dashboard</i>
                                 <a href="{{ url('/dashboard') }}">
                                     Dashboard
                                 </a>
                             </li>


                             <li class="{{ request()->is('dashboard/links*') ? 'active' : '' }}">
                                 <i class="material-icons" style="font-size:32px;">link</i>
                                 <a href="/dashboard/links">Links</a>
                             </li>




                         <li class="{{ request()->is('dashboard/search*') ? 'active' : '' }}">
                             <i class="material-icons" style="font-size:32px;">search</i>
                             <a href="/dashboard/search">Search</a>
                         </li>

                                                     </ul>
                                             </div>
                            <div class="dashboard-layout__right">

                                <div class="dashboard-header">
                                    <h2 class="dashboard-title">Dashboard</h2>
                                    <div>
                                        @auth
                                        <form method="POST" action="{{ route('logout') }}" class="logout-form">
                                            @csrf
                                            <button type="submit" class="logout-btn">
                                                <!-- Logout icon (SVG) -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                                    <polyline points="16 17 21 12 16 7"/>
                                                    <line x1="21" y1="12" x2="9" y2="12"/>
                                                </svg>
                                                Logout
                                            </button>
                                        </form>
                                        @endauth

                                    </div>

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
