<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Start Tilte -->
        @include('Home.includes.title-head')
    <!-- End Title -->
    <!--Start CSS File  -->
        @include('Home.includes.head')
    <!-- End CSS file -->

</head>

<body>
    <!--Start Nav-header-->
        @include('Home.includes.header-nav')
    <!--/End Nav-header-->
    <!--Start Main Content -->
        @yield('content')
    <!-- End Content -->
     

    <!--Start footer -->
       @include('Home.includes.footer')
    <!--End footer -->
      <!--Start  script file -->
        @include('Home.includes.foot')
      <!-- End script file -->
</body>

</html>