<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    @include('partials.head')

<body>

    @include('partials.navtop')


    @include('partials.navside')




        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">



            <div class="page-content">

                <div>
                    @session('success')


                    <div class="alert alert-success alert-dismissible shadow fade show" role="alert">{{ session('success') }}</div>
                    @endsession
                </div>




                <div class="container-fluid">




                    @yield('content')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            {{-- Footer Start --}}


            {{-- Footer End --}}


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->




    {{-- Theme Setter Start --}}




    {{-- Theme Setter End --}}


    @include('partials.script')

</body>

</html>
