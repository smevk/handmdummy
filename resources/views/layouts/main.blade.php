<!--
=========================================================
* Paper Dashboard 2 PRO - v2.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2-pro
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<head>   
@include('layouts.partials.header')
@include('layouts.partials.core_style')
@yield('style')
</head>

<body class="">
  <div class="wrapper ">
    @include('layouts.partials.side_nav')
    <div class="main-panel">
    @include('layouts.partials.top_nav')      
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>
     @include('layouts.partials.footer')
      
    </div>
  </div>
  @include('layouts.partials.core_script')
  @yield('script')
</body>

</html>