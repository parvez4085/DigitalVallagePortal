@php
$aid=session('aid')
@endphp
@if(empty($aid))
<script>
    location.href = "{{url('/admin')}}";
</script>
@endif
<!DOCTYPE html>
<html lang="en">

<head>
    @include('Home.includes.title-head')
    @include('Admin.includes.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Admin.includes.side-bar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Admin.includes.top-bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('Admin.includes.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    @include('admin.includes.foot')
    <!-- Bootstrap core JavaScript-->

    <script src="{{asset('admin-assets/vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $("#customCheck").click(function() {
                if ($(this).is(":checked")) {
                    $("#enddate").attr("disabled", "disabled");

                } else {
                    $("#enddate").removeAttr("disabled");
                    $("#enddate").focus();

                }
            });
        });
    </script>
</body>

</html>